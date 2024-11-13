<?php

namespace App\Http\Controllers;

use Google\Client;
use Google\Service\Calendar;
use Illuminate\Http\Request;

class GoogleCalendarController extends Controller
{
    public function login()
    {
        $client = new Client();
        $client->setApplicationName("Uneed");
        $client->setScopes(Calendar::CALENDAR);
        $client->setAuthConfig(storage_path('app/credentials.json'));

        // Generate the authentication URL
        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    }

    public function callback(Request $request)
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

        // Exchange the authorization code for an access token
        $token = $client->fetchAccessTokenWithAuthCode($request->input('code'));

        // Handle any errors in the token fetching
        if (isset($token['error'])) {
            return redirect()->route('home')->withErrors('Authentication failed: ' . $token['error']);
        }

        // Store access token and refresh token dynamically
        session(['access_token' => $token['access_token']]);

        // Store refresh token only if available
        if (isset($token['refresh_token'])) {
            session(['refresh_token' => $token['refresh_token']]);
        }

        // Set the access token in the client
        $client->setAccessToken($token['access_token']);

        return redirect()->route('dashboard');
    }

    public function createEvent(Request $request)
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));

        // Retrieve the access token from the session
        $accessToken = session('access_token');

        // Check if the access token is valid
        if (!$accessToken) {
            return redirect()->route('google.login')->withErrors('Access token is missing. Please login again.');
        }

        $client->setAccessToken($accessToken);

        // Check if the access token is expired
        if ($client->isAccessTokenExpired()) {
            \Log::info('Access token expired. Attempting to refresh.');

            $refreshToken = session('refresh_token');
            if ($refreshToken) {
                $newToken = $client->fetchAccessTokenWithRefreshToken($refreshToken);
                \Log::info('Access token refreshed: ' . json_encode($newToken));

                // Store new access token in the session
                session(['access_token' => $newToken['access_token']]);

                // Store the new refresh token if provided
                if (isset($newToken['refresh_token'])) {
                    session(['refresh_token' => $newToken['refresh_token']]);
                }
            } else {
                return redirect()->route('google.login')->withErrors('Access token expired. Please login again.');
            }
        }


        // Create a Google Calendar service instance
        $service = new Calendar($client);

        // Prepare the event details dynamically using request inputs
        $event = new \Google\Service\Calendar\Event([
            'summary' => $request->input('summary', 'Google Calendar Event'),
            'location' => $request->input('location', 'Zuidbaan 514, 2841 MD Moordrecht'),
            'description' => $request->input('description', 'UW reperatie verzoek bij Uneed-IT'),
            'start' => [
                'dateTime' => $request->input('startDateTime', '2024-10-10T10:00:00+02:00'),
                'timeZone' => $request->input('timeZone', 'Europe/Amsterdam'),
            ],
            'end' => [
                'dateTime' => $request->input('endDateTime', '2024-10-10T11:00:00+02:00'),
                'timeZone' => $request->input('timeZone', 'Europe/Amsterdam'),
            ],
            'attendees' => [
                ['email' => $request->input('attendeeEmail', 'bombagraal@gmail.com')],
            ],
        ]);

        $calendarId = 'primary';

        try {
            // Try to insert the event into the calendar
            $event = $service->events->insert($calendarId, $event);
            \Log::info('Event created successfully: ' . json_encode($event));
            return redirect()->route('dashboard')->with('success', 'Event created: ' . $event->htmlLink);
        } catch (\Exception $e) {
            \Log::error('Error creating Google Calendar event: ' . $e->getMessage());
            return redirect()->route('dashboard')->withErrors('Error creating event: ' . $e->getMessage());
        }
    }
}

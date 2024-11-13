<?php

namespace App\Services;

use Google_Client;
use Google_Service_Calendar;

class GoogleCalendarService
{
    protected $client;

    public function __construct()
    {
        // Initialize Google Client
        $this->client = new Google_Client();

        // Set the client ID and client secret from environment variables
        $this->client->setClientId(env('GOOGLE_CLIENT_ID'));
        $this->client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));

        // Load credentials from the specified path in the environment file
        $this->client->setAuthConfig(env('GOOGLE_CREDENTIALS_PATH'));

        // Add Google Calendar scope
        $this->client->addScope(Google_Service_Calendar::CALENDAR);

        // Set the redirect URI from environment variables
        $this->client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));


    }

    // Return Google Client
    public function getClient(): Google_Client
    {
        return $this->client;
    }

    // Return Google Calendar service instance
    public function getCalendarService()
    {
        return new Google_Service_Calendar($this->client);
    }

    
    public function authenticate($code)
    {
        $token = $this->client->fetchAccessTokenWithAuthCode($code);

        if (array_key_exists('error', $token)) {
            throw new \Exception('Authentication failed: ' . $token['error']);
        }

        // Set the access token in the client
        $this->client->setAccessToken($token['access_token']);

        // Save the refresh token if available
        if (array_key_exists('refresh_token', $token)) {
            $this->client->setRefreshToken($token['refresh_token']);
        }

        return $token;
    }


    public function refreshAccessTokenIfExpired()
    {
        if ($this->client->isAccessTokenExpired()) {
            // Attempt to refresh the access token
            $refreshToken = $this->client->getRefreshToken();
            if ($refreshToken) {
                $newToken = $this->client->fetchAccessTokenWithRefreshToken($refreshToken);
                $this->client->setAccessToken($newToken['access_token']);

                // Save the new refresh token if provided
                if (array_key_exists('refresh_token', $newToken)) {
                    $this->client->setRefreshToken($newToken['refresh_token']);
                }
            } else {
                throw new \Exception('Access token has expired and no refresh token is available. Please re-authenticate.');
            }
        }
    }
}

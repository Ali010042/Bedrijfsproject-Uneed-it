<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Offerte; // Ensure you use the correct case
use App\Http\Controllers\GoogleCalendarController; // Import the Google Calendar Controller
use Illuminate\Support\Facades\Route;

// Homepage route with name
Route::get('/', function () {
    return view('welcome');
})->name('home'); 

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes for user profiles
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/reperaties', 'reperaties')->name('reperaties');
    });

// Offerte route
Route::get('offerte', [offerte::class, 'index']);
Route::post('add', [offerte::class, 'add']);

Route::view('/apple', 'apple')->name('apple');
Route::view('/windows', 'windows')->name('windows');

// Other static views with names
Route::view('/diensten', 'Diensten')->name('diensten');
Route::view('/faq', 'faq')->name('faq');
Route::view('/news', 'news')->name('news');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/zakelijk', 'zakelijk')->name('zakelijk');

// Google Calendar routes
Route::get('/google/login', [GoogleCalendarController::class, 'login'])->name('google.login'); // Login route
Route::get('/google/callback', [GoogleCalendarController::class, 'callback'])->name('google.callback'); // Callback route
Route::post('/google/calendar/event', [GoogleCalendarController::class, 'createEvent']); // Event creation route

require __DIR__.'/auth.php';

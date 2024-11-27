<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController; // Import the controller
use App\Http\Controllers\SubscribeController; // Import the controller

Route::get('/', function () {
    return view('welcome');
});
    

Route::get('/landing-page', function () {
    return view('landing-page'); // Matches resources/views/landing-page.blade.php
});

Route::get('/donation', function () {
    return view('donation'); // Matches resources/views/donation.blade.php
});

Route::get('/founder', function () {
    return view('founder'); // Matches resources/views/founder.blade.php
});

Route::get('/transparency', function () {
    return view('transparency'); // Matches resources/views/transparency.blade.php
});

Route::get('/healthy-meals', function () {
    return view('healthy-meals'); // Matches resources/views/transparency.blade.php
});

Route::get('/school', function () {
    return view('school'); // Matches resources/views/transparency.blade.php
});

Route::get('/holiday', function () {
    return view('holiday'); // Matches resources/views/transparency.blade.php
});


Route::post('/landing-page', [SubscribeController::class, 'store'])->name('landing-page.store'); 
Route::post('/donation', [DonationController::class, 'store'])->name('donation.store'); 



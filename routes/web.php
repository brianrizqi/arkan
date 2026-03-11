<?php

use Illuminate\Support\Facades\Route;


// Auth::routes([
//     'register' => false
// ]);

// Hidden Login Routes
Route::get('/portal-access', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/portal-access', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/journal', function () {
    return view('journal');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/journal-detail', function () {
    return view('journal-detail');
});

Route::get('/portfolio-detail', function () {
    return view('portfolio-detail');
});

Route::get('/sustainability', function () {
    return view('sustainability');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/careers-detail', function () {
    return view('careers-detail');
});

Route::get('/help-support', function () {
    return view('help-support');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

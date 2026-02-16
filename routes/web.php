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

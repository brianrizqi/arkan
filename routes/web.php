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
    Route::resource('admin/portfolio', App\Http\Controllers\Admin\PortfolioController::class)->names('portfolio');
    Route::resource('admin/career', App\Http\Controllers\Admin\CareerController::class)->names('career');
    Route::resource('admin/career-category', App\Http\Controllers\Admin\CareerCategoryController::class)->names('career-category');
    Route::resource('admin/career-application', App\Http\Controllers\Admin\CareerApplicationController::class)->names('career-application');
});



Route::get('/', function () {
    $portfolios = App\Models\Portfolio::latest()->get();
    return view('home', compact('portfolios'));
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
    $portfolios = App\Models\Portfolio::latest()->get();
    return view('portfolio', compact('portfolios'));
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
    $careers = App\Models\Career::with('category')->latest()->get();
    $categories = App\Models\CareerCategory::whereHas('careers')->get();
    return view('careers', compact('careers', 'categories'));
});

Route::get('/careers/{slug}', function ($slug) {
    $career = App\Models\Career::where('slug', $slug)->firstOrFail();
    $more_roles = App\Models\Career::where('id', '!=', $career->id)->latest()->take(3)->get();
    return view('careers-detail', compact('career', 'more_roles'));
});

Route::post('/careers/apply', [App\Http\Controllers\CareerApplicationController::class, 'store'])->name('careers.apply');
Route::get('/captcha/get', [App\Http\Controllers\CareerApplicationController::class, 'getCaptcha'])->name('captcha.get');

Route::get('/help-support', function () {
    return view('help-support');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

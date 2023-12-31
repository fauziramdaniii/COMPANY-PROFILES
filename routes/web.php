<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;

// Menus
Route::get('/', [HomeController::class, 'index']);
// About
// Route::get('/about', [HomeController::class, 'about']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/team', [HomeController::class, 'team']);
// Contact
Route::get('/contact', [HomeController::class, 'contact']);
// Portfolio
Route::get('/portfolio', [HomeController::class, 'portfolio']);
// Services
Route::get('/service', [HomeController::class, 'services']);
// Testimonis
Route::get('/testimonis', [HomeController::class, 'testimonis']);

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard

// Crud Admin Content
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);
});

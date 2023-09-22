<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

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
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Crud Content
Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('testimonials', TestimonialController::class)->middleware('auth');
Route::resource('portfolios', PortfolioController::class)->middleware('auth');
Route::resource('clients', ClientController::class)->middleware('auth');
Route::resource('teams', TeamController::class)->middleware('auth');

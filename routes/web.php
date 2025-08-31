<?php

use Illuminate\Support\Facades\Route;

// --- Public Controllers ---
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoojaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;

// --- User Controllers ---
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\BookingController;

// --- Admin Controllers ---
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PoojaController as AdminPoojaController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;


/*
|--------------------------------------------------------------------------
| Public Routes (Accessible to Everyone)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pooja-packages', [PoojaController::class, 'index'])->name('packages.index');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{post:slug}', [BlogController::class, 'show'])->name('blogs.show');


/*
|--------------------------------------------------------------------------
| Guest-Only Routes (For Unauthenticated Users)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});


/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-bookings', [UserDashboardController::class, 'bookings'])->name('user.bookings');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});


/*
|--------------------------------------------------------------------------
| Admin Routes (Protected for Admins Only)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('poojas', AdminPoojaController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('posts', AdminPostController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
});


/*
|--------------------------------------------------------------------------
| General Authenticated Route (Logout)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
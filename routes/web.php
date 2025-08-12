<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\PoojaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PoojaController as AdminPoojaController;
// Inside the admin route group
use App\Http\Controllers\BlogController;

// ... your other routes ...

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{post:slug}', [BlogController::class, 'show'])->name('blogs.show');

// Admin Route Group
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('bookings', BookingController::class);
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('poojas', AdminPoojaController::class);
    // Inside the admin route group
Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
});

Route::get('/pooja-packages', [PoojaController::class, 'index'])->name('packages.index');

// Homepage Route
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home');

// Guest-only routes
Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

// Authenticated-only routes
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', function () {
        return view('dashboard'); // We will create this view next
    })->name('dashboard');
});
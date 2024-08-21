<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TourGuideController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/package/{id}', [IndexController::class, 'tourPackageDetails'])->name('package.details');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('/booking-history', [IndexController::class,'bookingHistory'])->middleware(['auth'])->name('booking-history');
Route::get('/change-password', [IndexController::class,'changePassword'])->middleware(['auth'])->name('change-password');
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::prefix('admin')->group(function () {
        Route::middleware('guest:admin')->group(function () {
            Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
            Route::post('/login', [LoginController::class, 'login']);
        });

        Route::middleware([AdminMiddleware::class])->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            Route::get('/permissions', [DashboardController::class, 'permissions'])->name('admin.permissions');
            Route::get('/add', [DashboardController::class, 'addAdmin'])->name('admin.add');
            Route::get('/manage-users', [DashboardController::class, 'manageUsers'])->name('admin.manage_users');
            Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
            Route::get('/tour-guide', [TourGuideController::class, 'manage'])->name('admin.manage_tour_guide');
            Route::get('/package', [TourGuideController::class, 'package'])->name('admin.package');
            Route::get('/bookings', [TourGuideController::class, 'bookings'])->name('admin.bookings');

        });
    });


require __DIR__.'/auth.php';

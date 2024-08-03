<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Middleware\AdminMiddleware;
use App\Livewire\Admin\ManagePermissions;

Route::view('/', 'welcome')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::prefix('admin')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [LoginController::class, 'login']);
        Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

        Route::middleware([AdminMiddleware::class])->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('admin.dashboard');
            Route::get('/admin/permissions', ManagePermissions::class)->name('admin.permissions');

        });
    });


require __DIR__.'/auth.php';

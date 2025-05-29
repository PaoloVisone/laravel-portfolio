<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Get
Route::middleware(['auth', 'verified'])
    ->name("admin")
    ->prefix("admin")
    ->group(function () {
        // Index
        Route::get("/index", [DashboardController::class, 'index'])
            ->name("index");

        // Profile
        Route::get("/profile", [DashboardController::class, 'profile'])
            ->name("profile");
    });

// Post
Route::resource('posts', PostController::class);

require __DIR__ . '/auth.php';

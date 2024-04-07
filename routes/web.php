<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/wag_cms/tinymce', function () {
    return view('tinymce');
});

Route::prefix('/controlpanel')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('/users')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    });
});

Route::get('/test', function () {
    return view('test');
});

require __DIR__.'/auth.php';

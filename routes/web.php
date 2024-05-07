<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/wag_cms/tinymce', function () {
    return view('tinymce');
});

Route::prefix('/controlpanel')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('/users')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::get('/delete/{user_id}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('/{user_id}/edit', [UserController::class, 'edit']);
        Route::get('/{user_id}/edit_project/{project_id}', [UserController::class, 'edit_project']);
        Route::patch('/update', [UserController::class, 'update'])->name('users.update');
    });

    Route::get('/roles', [DashboardController::class, 'roles'])->name('roles');
    Route::get('/projects', [DashboardController::class, 'projects'])->name('projects');

    Route::prefix('/project')->group(function() {
        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/site', [ProjectController::class, 'site'])->name('project.site');
        Route::patch('/update', [ProjectController::class, 'update'])->name('project.update');
    });

});

Route::get('/storage/{siteId}/{imageName}', [ImageController::class, 'show'])->name('images.show');


require __DIR__.'/auth.php';
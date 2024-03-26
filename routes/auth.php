<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('wag_cms/register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('wag_cms/register', [RegisteredUserController::class, 'store']);

    Route::get('wag_cms/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('wag_cms/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('wag_cms/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('wag_cms/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('wag_cms/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('wag_cms/reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('wag_cms/verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('wag_cms/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('wag_cms/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('wag_cms/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('wag_cms/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('wag_cms/password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('wag_cms/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::any('search', [SiteController::class, 'search'])->name('site.search');

Route::any('/authors', [SiteController::class, 'authors'])->name('site.authors');

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
     ->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
     ->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
     ->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])
     ->name('password.update');

Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])
     ->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

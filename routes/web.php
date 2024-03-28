<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\Game;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'games' => Game::all()
    ]);
});

Route::get('login', [LoginController::class, 'create'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// ============== currently working on these =======================
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('forgot-password', [ForgotPasswordController::class, 'create'])
    ->name('password.request');

Route::post('forgot-password', [ForgotPasswordController::class, 'store'])
    ->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('reset-password', [ResetPasswordController::class, 'store'])
    ->name('password.store');
// ============== currently working on these =======================


Route::get('/games/{game:slug}', function (Game $game) {
    return view('game', [
        'game' => $game
    ]);
}); // auth? guest?

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::get('/account', function() {
    return view('account');
})->middleware(['auth', 'verified']);

Route::get('/study', function() {
    return view('study');
})->middleware(['auth', 'verified']);

Route::get('/about', function() {
    return view('about');
})->middleware(['auth', 'verified']);

Route::get('/games', function() {
    return view('games');
})->middleware(['auth', 'verified']);
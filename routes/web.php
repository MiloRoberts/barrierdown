<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\Game;
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

Route::get('/games/{game:slug}', function (Game $game) {
    return view('game', [
        'game' => $game
    ]);
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth');

Route::get('/account', function() {
    return view('account');
})->middleware('auth');

Route::get('/study', function() {
    return view('study');
})->middleware('auth');

Route::get('/about', function() {
    return view('about');
})->middleware('auth');

Route::get('/games', function() {
    return view('games');
})->middleware('auth');
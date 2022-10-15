<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/card/random', [CardController::class, 'index'])->name('card.random');
Route::get('/user/random', [UserController::class, 'index'])->name('user.random');
Route::get('/password/random', [PasswordController::class, 'index'])->name('password.random');
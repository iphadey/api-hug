<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CardController;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\Api\v1\UuidController;
use App\Http\Controllers\Api\v1\LipsumController;
use App\Http\Controllers\Api\v1\PasswordController;
use App\Http\Controllers\Api\MnemonicController;

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
    //return $request->user();
});

Route::get('/card/random', [CardController::class, 'index'])->name('card.random');
Route::get('/user/random', [UserController::class, 'index'])->name('user.random');
Route::get('/password/random', [PasswordController::class, 'index'])->name('password.random');
Route::get('/uuid/random', [UuidController::class, 'index'])->name('uuid.random');
Route::get('/lipsum/{g}', [LipsumController::class, 'index'])->name('lipsum.random')->whereNumber('g');
Route::get('/post/random', [PostController::class, 'index'])->name('post.random');
Route::post('/mnemonic/random', [MnemonicController::class, 'index'])->name('mnemonic.random');

<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// NOTE Группируем все роуты через префикс {auth}, именуем роут {auth}, группируем middleware для всех роутов,
Route::prefix('auth')->name('auth')->middleware('jwt:admin,user')->group(function () {
    // NOTE Исключаем middleware только роут {login} с помощью [withoutMiddleware]
    Route::post('login', [AuthController::class, 'login'])->name('login')->withoutMiddleware('jwt:admin,user');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('me', [AuthController::class, 'me'])->name('me');
});

Route::prefix('v1')->name('v1')->middleware('jwt:admin,user')->group(function() {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('users', [UserController::class, 'store'])->middleware('jwt:admin')->name('users.store');
    Route::put('users/{user}', [UserController::class, 'update'])->middleware('jwt:admin')->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('jwt:admin')->name('users.delete');
});
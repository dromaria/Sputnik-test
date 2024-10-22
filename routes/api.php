<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('jwt.auth');
    Route::post('refresh', [AuthController::class, 'refresh'])->middleware('jwt.auth');

});

Route::controller(PlaceController::class)->middleware('jwt.auth')->group(function (){
    Route::get('/places', 'index');
    Route::post('/places', 'store');
});

Route::controller(FavoriteController::class)->middleware('jwt.auth')->group(function (){
    Route::get('/users/{id}/favorites', 'index');
    Route::post('/users/{id}/favorites', 'store');
});

Route::controller(UserController::class)->middleware('jwt.auth')->group(function (){
    Route::get('/users', 'index');
    Route::post('/users', 'store');
});

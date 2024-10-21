<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(PlaceController::class)->group(function (){
    Route::get('/places', 'index');
    Route::post('/places', 'store');
});

Route::controller(FavoriteController::class)->group(function (){
    Route::get('/users/{id}/favorites', 'index');
    Route::post('/users/{id}/favorites', 'store');
});

Route::controller(UserController::class)->group(function (){
    Route::get('/users', 'index');
    Route::post('/users', 'store');
});

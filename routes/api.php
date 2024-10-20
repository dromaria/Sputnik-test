<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

Route::controller(PlaceController::class)->group(function (){
    Route::get('/places', 'index');
    Route::post('/places', 'store');
});

Route::controller(FavoriteController::class)->group(function (){
    Route::get('/users/{id}/favorites', 'index');
    Route::post('/users/{id}/favorites', 'store');
});

<?php

use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

Route::controller(PlaceController::class)->group(function (){
    Route::get('/places', 'index');
    Route::post('/places', 'store');
});

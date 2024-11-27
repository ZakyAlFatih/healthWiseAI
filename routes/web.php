<?php

use App\Http\Controllers\healthWiseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FoodRec', [healthWiseController::class, 'tampil'])->name('healthWise.tampil');

<?php

use App\Http\Controllers\healthWiseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FoodRec', [healthWiseController::class, 'tampil'])->name('healthWise.tampil');


Route::get('/chat', [ChatController::class, 'showChat']);

// Handle the chat message (POST request)
Route::post('/chat', [ChatController::class, 'getChatResponse']);

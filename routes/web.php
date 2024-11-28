<?php

use App\Http\Controllers\healthWiseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FeaturePageController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HealthReportLPController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FoodRec', [healthWiseController::class, 'tampil'])->name('healthWise.tampil');


Route::get('/chat', [ChatController::class, 'showChat']);
Route::get('/Exercise', [ExerciseController::class, 'showExercise']);
Route::get('/FeaturePage', [FeaturePageController::class, 'showFeaturePage']);
Route::get('/Food', [FoodController::class, 'showFood']);
Route::get('/Health', [HealthController::class, 'showHealth']);
Route::get('/HealthReportLP', [HealthReportLPController::class, 'showHealthReportLP']);
Route::get('/LandingPage', [LandingPageController::class, 'showLandingPage']);
Route::get('/Login', [FeaturePageController::class, 'showLogin']);
Route::get('/Register', [RegisterController::class, 'showRegister']);
// Handle the chat message (POST request)
Route::post('/chat', [ChatController::class, 'getChatResponse']);

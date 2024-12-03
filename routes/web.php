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
use App\Http\Controllers\LoginController;
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
// Route::get('/Login', [LoginController::class, 'showLogin']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
// Handle Login (post)
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/Logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Register', [RegisterController::class, 'showRegister']);
Route::get('/Register', [RegisterController::class, 'showRegister'])->name('register');
// Handle the chat message (POST request)
Route::post('/chat', [ChatController::class, 'getChatResponse']);
Route::post('/register', [RegisterController::class, 'register']);

// Route for showing the dashboard (GET request)
Route::get('/FeaturePage', [FeaturePageController::class, 'showFeaturePage'])->name('FeaturePage');

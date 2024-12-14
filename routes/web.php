<?php

use App\Http\Controllers\healthWiseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FeaturePageController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HealthReportLPController;
use App\Http\Controllers\InputHealthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecomendationController;
use App\Http\Controllers\RegisterController;


Route::get('/', [LandingPageController::class, 'showLandingPage']);

Route::get('/FoodRec', [healthWiseController::class, 'tampil'])->name('healthWise.tampil');


Route::get('/chat', [ChatController::class, 'showChat']);
Route::get('/Exercise', [ExerciseController::class, 'showExercise']);

Route::get('/food', [FoodController::class, 'showFood']);
Route::get('/health', [HealthController::class, 'showHealth']);
Route::get('/healthreportlp', [HealthReportLPController::class, 'showHealthReportLP']);

// Route::get('/Login', [LoginController::class, 'showLogin']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
// Handle Login (post)
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegister']);
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
// Handle the chat message (POST request)
Route::post('/chat', [ChatController::class, 'getChatResponse']);
Route::post('/register', [RegisterController::class, 'register']);

// Route for showing the dashboard (GET request)
Route::get('/featurepage', [FeaturePageController::class, 'showFeaturePage'])->name('FeaturePage');

// route for input health
Route::get('/input-personal', [InputHealthController::class, 'showInputHealth'])->name('input-personal');
Route::post('/input-personal', [InputHealthController::class, 'showInputHealth'])->name('input-personal');

Route::get('/input-dailyact', [InputHealthController::class, 'showInputHealthDailyAct'])->name('input-dailyact');
Route::post('/input-dailyact', [InputHealthController::class, 'showInputHealthDailyAct'])->name('input-dailyact');

Route::get('/input-diet', [InputHealthController::class, 'showInputHealthDiet'])->name('input-diet');
Route::post('/input-diet', [InputHealthController::class, 'showInputHealthDiet'])->name('input-diet');

Route::post('/health', [InputHealthController::class, 'store'])->name('health.store');


//Testing Food Recomendation and Exer
Route::get('/food-rec', [RecomendationController::class, 'showFood'])->name("food-rec");

//
Route::get('/exer-rec', [RecomendationController::class, 'showExer'])->name("exer-rec");


Route::get('/health-page', [RecomendationController::class, 'showHealth'])->name('health-page');


Route::get('/health-rec', [RecomendationController::class, 'showHealthRec'])->name('health-rec');

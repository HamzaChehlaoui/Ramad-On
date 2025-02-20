<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\StatisticsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Experiences', [ExperienceController::class, 'index'])->name('posts');
Route::get('/Recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/Statistics', [StatisticsController::class, 'index'])->name('statistics');
Route::post('/posts', [ExperienceController::class, 'store'])->name('posts.store');

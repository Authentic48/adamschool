<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('welcome');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/pricing', [App\Http\Controllers\PageController::class, 'pricing'])->name('pricing');
Route::get('/courses', [App\Http\Controllers\PageController::class, 'courses'])->name('courses');
Route::get('/team', [App\Http\Controllers\PageController::class, 'team'])->name('team');
Route::get('/reviews', [App\Http\Controllers\PageController::class, 'reviews'])->name('reviews');
Route::get('/partnership', [App\Http\Controllers\PageController::class, 'partnership'])->name('partnership');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

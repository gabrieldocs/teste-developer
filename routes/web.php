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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/movies', [App\Http\Controllers\HomeController::class, 'movies'])->name('home');
Route::get('/movies/{id}/detalhes', [App\Http\Controllers\HomeController::class, 'movie'])->name('home');
Route::get('/genders', [App\Http\Controllers\HomeController::class, 'genders'])->name('genders');
Route::get('/genders/{id}/detalhes', [App\Http\Controllers\HomeController::class, 'gender'])->name('genders');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutMe'])->name('aboutMe');

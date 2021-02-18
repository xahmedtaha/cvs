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

Route::view('/', 'home')->name('home');

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

Route::get('/playlists', [\App\Http\Controllers\PlaylistController::class, 'index'])->name('playlists.index');
Route::get('/playlists/{playlist}', [\App\Http\Controllers\PlaylistController::class, 'show'])->name('playlists.show');

Route::get('/livesandsessions', [\App\Http\Controllers\liveController::class, 'index'])->name('livesandsessions.index');
Route::get('/livesandsessions/{livesandsessions}', [\App\Http\Controllers\liveController::class, 'show'])->name('livesandsessions.show');

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'message'])->name('message.send');

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
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/article', function () {
    return view('article');
});

Route::get('/blog/{slug}', function ($slug){
    return view('article')->with('article', \Canvas\Models\Post::where('slug', $slug)->firstOrFail());
})->name('post');

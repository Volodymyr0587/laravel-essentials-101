<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', ['data' => 'HELLO']);
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/user/{id?}', function($id = null) {
    return 'User ' . $id;
})->where('id', '[0-9]+');

Route::get('/category/{category}', function(string $category) {
    return 'Category: ' . $category;
})->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/test2', function () {
//     return 'Test2';
// });



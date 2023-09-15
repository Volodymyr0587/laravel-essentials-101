<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome')->name('home');

Route::resource('/posts', PostController::class)->only('index', 'show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id?}', [UserController::class, 'show'])->whereNumber('id')->name('users.show');
});




//?TEST ROUTES
// Route::get('/', function () {
//     return view('welcome', ['data' => 'HELLO']);
// })->name('home');

// Route::get('/test', function () {
//     return view('test');
// })->name('test');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

// Route::get('/category/{category}', function(string $category) {
//     return 'Category: ' . $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/users/{id?}', function($id = null) {
    //     return 'User ' . $id;
    // })->whereNumber('id')->name('users.show'); // ->where('id', '[0-9]+') the same as whereNumber('id')

// Route::get('/test2', function () {
//     return 'Test2';
// });



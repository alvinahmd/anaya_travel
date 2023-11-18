<?php

use Illuminate\Support\Facades\Route;
use App\controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('user/home');
// });
// Route::get('/hello', function () {
//     return 'Hello Word';
// });
// Route::get('/belajar', function () {
//     echo '<h1>Hellow Word</h1>';
//     echo '<h1>Sedang belajar laravel</h1>';
// });
// Route::get('/siswa/rpl/novi', function () {
//     echo '<h2 style="text-align: center">Welcome to laravel novi</h2>';
// });
// Route::get('/guru', function () {
//     return view('guru');
// });
// Route::get('/siswa', function () {
//     return view('siswa');
// });

Route::get('/users', function () {
    return view('users/about');
});
Route::resource('/post', \App\Http\Controllers\PostController::class);
Route::resource('/create', \App\Http\Controllers\PostController::class);
Route::get('/category', [PostController::class, 'category']);
Route::put('/post/{id}', '\APP\Http\Controllers\PostController@update')->name('posts.update');
Route::get('/', [\App\Http\Controllers\PostController::class, 'user']);
Route::get('/search', '\App\Http\Controllers\PostController@search')->name('posts.search');
Route::get('/cari', [\App\Http\Controllers\PostController::class, 'cari']);
Route::get('/caricategory', [\App\Http\Controllers\PostController::class, 'caricategory']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signupPost'])->name('signup');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
Route ::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

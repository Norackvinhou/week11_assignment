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

// Route::get('/', function () {
//     return view('dashboard');
// })->name('home');

Route::get('/',[App\Http\Controllers\DashboardController::class,'index'])->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');


Route::post('logout',[App\Http\Controllers\AuthController::class ,'logout'])->name('auth.logout');

Route::resource('categories',App\Http\Controllers\CategoryController::class);

Route::get('login',[App\Http\Controllers\AuthController::class ,'loginForm'])->name('auth.login_form');
Route::post('login',[App\Http\Controllers\AuthController::class ,'login'])->name('auth.login');

Route::get('register',[App\Http\Controllers\AuthController::class ,'registerForm'])->name('auth.register_form');
Route::post('register',[App\Http\Controllers\AuthController::class ,'register'])->name('auth.register');

Route::resource('posts',App\Http\Controllers\PostController::class);

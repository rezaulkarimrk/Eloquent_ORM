<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/numbers', [PhoneController::class, 'index'])->name('numbers');
// Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users', [PhoneController::class, 'index'])->name('users');
Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/Rezaul', [PostController::class, 'posts']);


<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('register');
// });

Route::get('/signin', [AuthController::class,'index']);
Route::post('/signin', [AuthController::class, 'login'])->name('login');
Route::get('/signup', [UserController::class,'index']);
Route::post('/signup', [UserController::class,'store'])->name('signup');

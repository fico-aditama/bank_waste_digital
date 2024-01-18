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

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/login', [AuthController::class,'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/registration', [UserController::class,'index']);
Route::post('/registration', [UserController::class,'store'])->name('signup');

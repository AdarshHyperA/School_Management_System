<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });

// Login
// Route::resource('/login',AdminController::class);
// Route::post('login',AdminController::class,'AuthLogin');
// Route::get('/register', [AdminController::class, 'register']);


// Database paper
Route::resource('/',StudentController::class);
Route::resource('/students',StudentController::class);
Route::resource('/create',StudentController::class);
Route::resource('/show',StudentController::class);


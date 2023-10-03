<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\AuthController;

Route::get('/', [ContactController::class, "getindex"])->name("form.show");
Route::get('/attendance/start', [ContactController::class, "startAttendance"])->name("form.attendance")
Route::get('/attendance/start', [ContactController::class, "endAttendance"])->name("form.attendance")
Route::get('/attendance/{num}', [ContactController::class, "getAttendance"])->name("form.attendance")
Route::get('/break/start', [RestController::class, "startRest"])->name("form.attendance")
Route::get('/break/end', [RestController::class, "endtRest"])->name("form.attendance")
Route::get('/register', [AuthController::class, "getRegister"])->name("form.register");
Route::post('/register', [AuthController::class, "postRegister"])->name("form.register");
Route::get('/login', [AuthController::class, "getLogin"])->name("form.login")
Route::post('/login', [AuthController::class, "postLogin"])->name("form.login")
Route::get('/logout', [AuthController::class, "getLogout"])->name("form.logout")

// Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

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

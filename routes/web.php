<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;

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



// Authentication
Route::match(['post', 'get'], '/', [AuthController::class, 'handleTokenizer']);
Route::match(['post', 'get'], '/login', [AuthController::class, 'handleLogin']);

// Mailer 
Route::match(['post', 'get'], '/mail/{mail}/{token}', [MailController::class, 'handleMail'])->name('mail');

// Dashboard Routees

// Student
Route::match(['post', 'get'], '/students', function(){
    return view('admin.students');
});

// Dashbord 
Route::match(['post', 'get'], '/dashboard', function(){
    return view('admin.dashboard');
});

// Users
Route::match(['post', 'get'], '/user', [UserController::class, 'handleUser']);

Route::view('/result', 'admin.result');
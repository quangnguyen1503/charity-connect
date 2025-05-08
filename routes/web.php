<?php

use App\Http\Controllers\Account;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get(('/'),[
    UserController::class,
    'index'
])->name('profile');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/editvolunteer', [Account::class, 'editvolunteerShow'])->name('editvolunteer.show');
Route::post('/editvolunteer/{id}', [Account::class, 'editvolunteer'])->name('editvolunteer');

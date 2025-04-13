<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get(('/'),[
    UserController::class,
    'index'
])->name('profile');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout',function() { return view('layout.login_signin.login');});

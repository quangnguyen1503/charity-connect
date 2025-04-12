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
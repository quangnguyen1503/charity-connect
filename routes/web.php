<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;




Route::get(('/'),[
    UserController::class,
    'index'
])->name('profile');
Route::get('/volunteer/{id}', [VolunteerController::class, 'profile']);
Route::get('/organization/{id}', [OrganizationController::class, 'profile']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EventController;



// Route::get(('/'),[
//     UserController::class,
//     'index'
// ])->name('profile');
Route::get('/volunteers/{id}', [VolunteerController::class, 'profile']);
Route::get('/organizations/{id}', [OrganizationController::class, 'profile']);
Route::get('/organizations/pending', [OrganizationController::class, 'pending']);
// Route::post('/organizations/{id}/approve', [OrganizationController::class, 'approve']);




// Route::get('/', function () {
//     return view('contents.profile');
// })->name('home');


// event route
Route::get('/events/pending',[EventController::class,'pending']);
Route::get('/', [EventController::class, 'index']);


//route vinh danh
Route::get('/top', [VolunteerController::class, 'topVolunteersLastQuarter']);
<?php

use App\Http\Controllers\Account;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;



use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EventController;



// Route::get(('/'),[
//     UserController::class,
//     'index'
// ])->name('profile');
Route::get('/volunteers/{id}', [VolunteerController::class, 'profile']);
// Route::post('/organizations/{id}/approve', [OrganizationController::class, 'approve']);




// Route::get('/', function () {
//     return view('contents.profile');
// })->name('home');


// event route
Route::get('/events/pending',[EventController::class,'getPendingEvents']);
Route::get('/events/approved', [EventController::class, 'index']);
Route::get('/events/rejected',[EventController::class,'getRejected']);

Route::get('/events/{id}', [EventController::class, 'profile']);
Route::get('/admin/events/{id}', [EventController::class, 'adminProfile']);



// route tổ chức
Route::get('/organizations/approved', [OrganizationController::class, 'getApproved']);
Route::get('/organizations/pending', [OrganizationController::class, 'getPending']);

Route::get('/organizations/rejected', [OrganizationController::class, 'getRejected']);

Route::get('admin/organizations/{id}', [OrganizationController::class, 'profile']);
Route::get('/organizations/{id}', [OrganizationController::class, 'index']);




//route vinh danh
Route::get('/top', [VolunteerController::class, 'topVolunteersLastQuarter']);




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/editvolunteer', [Account::class, 'editvolunteerShow'])->name('editvolunteer.show');
Route::post('/editvolunteer/{id}', [Account::class, 'editvolunteer'])->name('editvolunteer');





// route volunteer




Route::get('/volunteers/{id}', [VolunteerController::class, 'profile']);
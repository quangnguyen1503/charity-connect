<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;




// Route::get(('/'),[
//     UserController::class,
//     'index'
// ])->name('profile');
Route::get('/volunteer/{id}', [VolunteerController::class, 'profile']);
Route::get('/organization/{id}', [OrganizationController::class, 'profile']);
Route::get('/organizations/pending', [OrganizationController::class, 'pending']);
// Route::post('/organizations/{id}/approve', [OrganizationController::class, 'approve']);


Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

Route::get('/', function () {
    return view('contents.profile');
})->name('home');

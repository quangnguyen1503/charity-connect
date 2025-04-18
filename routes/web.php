<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\EventController;





Route::get(('/'), [
    UserController::class,
    'index'
])->name('profile');
Route::get('/volunteer/{id}', [VolunteerController::class, 'profile']);
Route::get('/organization/{id}', [OrganizationController::class, 'profile']);
Route::get('/organizations/pending', [OrganizationController::class, 'pending']);
Route::post('/organizations/{id}/approve', [OrganizationController::class, 'approve']);
Route::get('/result', [ResultController::class, 'index']);
//Route::get('/result/{id}', [ResultController::class, 'show'])->name('result.show');
Route::get('/event', [EventController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');


Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

<?php
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});
Route::post('/organizations/{id}/approve', [OrganizationController::class, 'approve']);


// event route
Route::post('events/approve/{id}',[EventController::class,'approve']);
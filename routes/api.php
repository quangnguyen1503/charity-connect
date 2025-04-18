<?php
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});
Route::post('/organizations/{id}/approve', [OrganizationController::class, 'approve']);

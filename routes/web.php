<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ResultController;

// Route::get(('/'), [UserController::class,'index'])->name('profile');
Route::get('/', function () {
    return view('layouts.app');
})->name('home');
Route::get('/volunteer/{id}', [VolunteerController::class, 'profile']);
Route::get('/organization/{id}', [OrganizationController::class, 'profile']);
Route::get('/result', [ResultController::class, 'index'])->name('result.list');
Route::get('/result/create/{id}', [ResultController::class, 'create'])->name('result.create');
Route::post('/result/store/{id}', [ResultController::class, 'store'])->name('result.store');
Route::delete('/result/delete/{id}', [ResultController::class, 'destroy'])->name('result.destroy');
Route::get('/result/edit/{id}', [ResultController::class, 'edit'])->name('result.edit');
Route::put('/result/update/{id}', [ResultController::class, 'update'])->name('result.update');
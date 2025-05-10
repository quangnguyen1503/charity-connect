<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'])->name('events.index');
Route::get('/volunteer/{id}', [VolunteerController::class, 'profile'])->name('volunteer.profile');
Route::get('/organization/{id}', [OrganizationController::class, 'profile'])->name('organization.profile');

Route::get('/event/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/event/edit/{event}', [EventController::class, 'edit'])->name('events.edit');
Route::put('/event/{event}', [EventController::class, 'update'])->name('events.update');

Route::get('/event/{event}', [EventController::class, 'show'])->name('events.show');

Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::post('/event/register/{event}', [EventController::class, 'register'])->name('events.register');
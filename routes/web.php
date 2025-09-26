<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EventController;
use App\Http\Controllers\EventContact;  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [EventCOntroller::class, 'dashboard'])->middleware('auth');



<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EventController;
use App\Http\Controllers\EventContact;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contact', function() {
    return view('contact');
});
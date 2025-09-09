<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EventController;
use App\Http\Controllers\EventContact;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/', [EventController::class, 'index']);
Route::get('/events/contact', [EventController::class, 'contact']);
Route::get('/produtos', function () {
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});
Route::get('/produtos_teste/{id}', function ($id = null ) {
    return view('product', ['id' => $id]);
});


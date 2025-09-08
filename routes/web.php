<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $nome = "Allan";
    $idade = 22;
    $profissao = "Programador";
    $nomes = ["matheus", "maria", "Joao", "Allan"];

    $arr = [10,20,30,40,50];
    return view('welcome', 
    [
        'nome' => $nome,
        'idade' => $idade, 
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/produtos', function () {
    return view('products');
});
Route::get('/produtos/{id}', function ($id) {
    return view('products', ['id' => $id]);
});


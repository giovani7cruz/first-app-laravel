<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Giovani Da Cruz";
    $idade = 33;
    $profissao = "Programador";

    /* O que se usa nas blades é o nome da chave do elemento no array */ 
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 
    'profissao' => $profissao]);
});

Route::get('/first', function () {
    return view('first-page');
});

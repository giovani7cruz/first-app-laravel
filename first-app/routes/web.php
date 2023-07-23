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

    $arr = [10, 20, 30, 40, 50];

    $nomes = ["Giovani", "João", "José", "Joaquim"];

    /* O que se usa nas blades é o nome da chave do elemento no array */ 
    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/first', function () {
    return view('first-page');
});

/* exemplo de parâmetros string */ 
Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

/* Exemplo de parâmetros na url */ 
Route::get('/produto/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;

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

/* Buscando um retorno do controller "EventController", método "index" */
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/first', function () {
    return view('first-page');
});

/* exemplo de parâmetros string */ 
Route::get('/produtos', [ProductController::class, 'index'] );

/* Exemplo de parâmetros na url */ 
Route::get('/produto/{id?}', [ProductController::class, 'getProduct']);
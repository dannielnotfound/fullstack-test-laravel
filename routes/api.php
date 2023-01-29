<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;
use App\Http\Controllers\ApiController;


Route::get('/', function (Request $request) {
    return response()->json([
        'mensagem' => 'Olá mundo, servidor api funcionando!'
    ]);
});

Route::get('/hello', [ HelloController::class, 'hello' ]);
Route::get('/getData', [ ApiController::class, 'returnDateTime']);
Route::post('/getText', [ ApiController::class, 'returnRequestText']);

// TODO: criar uma rota que retorne a data-hora atual (sugestão: use a função `now()`)
// TODO: criar uma rota POST que chame uma função em um controller e retorne o texto recebido na requisição

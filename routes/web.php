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
    $nome = "leandro";
    $arr = [10,20,30,40,50,60,70,80,90,100];
    return view('welcome',
    [
        'nome' => $nome,
        'arr' => $arr,
        'nomes' => ["Xandão", "paulo", "tales", "nathan", "Eminem"]
    ]);
});

Route::get('/contato', function () {
    return view('contato');
}); //isso e uma rota, ela faz o que o nome ja sugere ela cria uma rota.

Route::get('/produtos', function ($busca) {

    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos_testes/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});

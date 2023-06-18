<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutosController;
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

//Route::get('/', 'PedidosController@index');
Route::get('/', [PedidosController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'index']);


Route::get('/home', function () {
    return view('home');
});
Route::get('/pedidos/{idPedido}', function ($idPedido) {
   echo 'Pedido:'.$idPedido;
});

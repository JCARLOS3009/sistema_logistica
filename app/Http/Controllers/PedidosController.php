<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
   public function index(){
        $cliente = "Maria Nunes";
        $nome_produto = "wella";
        $dados = [
            'cliente' => $cliente,
            'nome_produto' => $nome_produto
        ];
        return view ('home', $dados);
    }
}

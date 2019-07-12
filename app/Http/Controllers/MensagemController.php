<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensagem;

class MensagemController extends Controller
{
    public function __construct(Mensagem $mensagem, Request $request)
    {
        $this->mensagem = $mensagem;
        $this->mequest = $request;
    }
    public function index()
    {
        $dados = $this->mensagem->all(); 
        dd($dados);
        return response()->json('Vaca amarela');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Prestador;  

class PrestadorController extends Controller
{

    public function create()
    {
        return view('site.homeprestador');
    }

    public function store(Request $request)
    {
        Prestador::create([
            'nome_prestador' => $request->nome_prestador,
            'end_prestador' => $request->end_prestador,
            'telefone_prestador' => $request->telefone_prestador,
            'email_prestador' => $request->email_prestador,
            'cpf_prestador' => $request-> cpf_prestador,
            'profissao' => $request -> profissao,
            'senha_prestador' => $request-> senha_prestador,
        ]);
        return view('site.login');
      
             
    }
}

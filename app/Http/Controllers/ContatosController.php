<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Contatos;

class ContatosController extends Controller
{
    public function create()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
        Contatos::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'msg' => $request->msg,
        ]);
        return view('site.contact');
         

    
    }

}

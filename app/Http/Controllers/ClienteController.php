<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create()
    {
        return view('site.homecliente');
    }

        public function store (Request $request)
    {
        Cliente::create([
            'nome_cliente' => $request->nome_cliente,
            'end_cliente' => $request->end_cliente,
            'telefone_cliente' => $request->telefone_cliente,
            'email_cliente' => $request->email_cliente,
            'senha_cliente' => $request->senha_cliente,
        ]);
    
        return view('site.login');

        
            
    }

    public function authenticate(Request $request)
    
    {
        $credentials = $request->validate([
            'email_cliente' => ['required', 'email_cliente'],
            'senha_cliente' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('homecliente');
        }

        return back()->withErrors([
            'email_cliente' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    
    }

}

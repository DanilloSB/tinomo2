<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descricaoservico extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_servico',
        'tipo_servico',
        'nome_prestador',
        'telefone_prestador',
        'nome_cliente',
        'telefone_cliente',
        'end_cliente',
        'custo_servico',
        'forma_pagamento',
    ];
}

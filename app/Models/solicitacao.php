<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_servico',
        'data_servico',
        'nome_prestador',
    ];
}

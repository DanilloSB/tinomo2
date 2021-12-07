<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_prestador',
        'end_prestador',
        'telefone_prestador',
        'email_prestador',
        'cpf_prestador',
        'profissao',
        'senha_prestador'
    ];
}

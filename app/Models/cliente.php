<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_cliente',
        'end_cliente',
        'telefone_cliente',
        'email_cliente',
        'senha_cliente'
    ];
}

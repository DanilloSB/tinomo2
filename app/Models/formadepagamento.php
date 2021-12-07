<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formadepagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'forma_pagamento',
        'descricao',
    ];
}

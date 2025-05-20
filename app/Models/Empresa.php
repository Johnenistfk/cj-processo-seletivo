<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor_boleto',
        'valor_cartao',
        'saldo_credito',
        'proxima_recorrencia',
    ];
}

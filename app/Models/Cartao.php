<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresa_id',
        'numero_cartao',
        'data_validade',
        'codigo_seguranca',
        'nome_titular'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}

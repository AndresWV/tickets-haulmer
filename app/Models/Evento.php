<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'nombre_evento',
        'fecha',
        'hora',
        'lugar',
        'precio',
        'disponibilidad',
        'categoria',
        'descripcion',
        'url_entradas',
    ];
}

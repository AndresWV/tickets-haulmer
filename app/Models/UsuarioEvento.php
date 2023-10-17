<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioEvento extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'mail', 'password'];

    public function ticketsVendidos(){
        return $this->hasMany(TicketVendido::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketVendido extends Model
{
    protected $fillable = [
        'user_id',
        'event_id',
        'precio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Evento::class, 'event_id');
    }
}


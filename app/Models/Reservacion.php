<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table="reservas";

    protected $filliable=[
        'nombres',
        'correo',
        'servicios',
        'fecha_entrada',
        'estado',
        'cantidad_ninos',
        'cantidad_adultos'
    ];
}

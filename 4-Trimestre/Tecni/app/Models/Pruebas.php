<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
    protected $table = 'pruebas_de_campo';

    protected $fillable = [
        'nombre_empleado',
        'fecha',
        'numero_cilindro',
        'numero_prueba',
        'cliente',
        'ubicacion',
        'sondeos',
        'revenimiento',
        'ultrasonico',
        'esclerometria',
        'analisis_petrograficos',
        'elaboracion',
        'reactividad',
        'compresion',
    ];
}

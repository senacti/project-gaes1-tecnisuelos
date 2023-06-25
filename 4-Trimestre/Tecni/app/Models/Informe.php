<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    
    protected $table = 'nuevo_informe';

    protected $fillable = [
        'nombre_empleado',
        'fecha',
        'numero_cilindro',
        'numero_prueba',
        'cliente',
        'granulometria',
        'aire',
        'flexion',
        'compresion',
        'estudio',
        'eslasticidad',
        'contraccion',
        'pruebas_permeabilidad'
    ];
}

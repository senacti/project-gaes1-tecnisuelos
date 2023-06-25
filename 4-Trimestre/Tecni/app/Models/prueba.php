<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
        'esclorometria',
        'analisis_petrograficos',
        'elaboracion',
        'reactividad',
        'compresion'
    ];
}

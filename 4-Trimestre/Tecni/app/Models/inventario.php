<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'inventario'; 

    protected $fillable = [
        'categoria',
        'descripcion',
         'nombre',
         'imagen',
         'cantidad',
    ];
}
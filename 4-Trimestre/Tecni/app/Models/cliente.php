<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'clientes'; 

    protected $fillable = [
        'direccion',
        'date',
        'number',
        'name',
        'email',
        'last_name',
    ];
}

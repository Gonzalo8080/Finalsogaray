<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heroe extends Model
{
    use HasFactory;

    //
    protected $fillable = [
        'nombre', 'apodo', 'rol', 'elemento', 'arma', 'edad', 'especie'
    ];
}

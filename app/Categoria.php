<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    protected $fillable = [
        'imagen',
        'nombre',
        'descripcion',
        'cantidad',
    ];

    protected $primaryKey = 'id';
}

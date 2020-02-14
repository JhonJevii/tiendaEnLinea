<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'estado_pedido';

    protected $fillable = [
        'idProducto',
        'precioOferta',
        'detalle',
        'tiempoOferta',
    ];

    protected $primaryKey = 'id';
}

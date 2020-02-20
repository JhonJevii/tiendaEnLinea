<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = 'imagenProducto';

    protected $fillable = [
    	'id',
    	'path',
    	'idProducto',
    ];

    protected $primaryKey = 'id';

    public function getUrlPathAttribute()
    {
    	return \Storage::url($this->path);
    }
}

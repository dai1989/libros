<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table="proveedores";
    public function libros ()
    {
    	return $this->belongsTo("App\Models\Libros");
    }
}



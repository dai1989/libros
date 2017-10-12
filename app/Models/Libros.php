<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $table="libros";
    public function proveedor ()
    {
    	return $this->belongsTo("App\Models\Proveedor");
    }
}

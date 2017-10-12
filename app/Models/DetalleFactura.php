<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table="detalle_factura";
     public function factura ()
    {
    	return $this->belongsTo("App\Models\Factura");
    }
    public function libro ()
    {
    	return $this->belongsTo("App\Models\Libros");
    }
}

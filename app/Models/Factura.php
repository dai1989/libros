<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table="factura";
    public function cliente ()
    {
    	return $this->belongsTo("App\Models\Cliente");
    }
}

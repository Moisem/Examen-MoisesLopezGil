<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    protected $tabla='num_factura';
    protected $guarded=['id'];
    protected $fillable=['numero_factura','producto_id','cantidad'];
}

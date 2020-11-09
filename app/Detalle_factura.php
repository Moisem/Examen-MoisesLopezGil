<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    protected $tabla='num_factura';
    protected $guarded=['id'];
    protected $fillable=['numero_factura','producto_id','cantidad'];
    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

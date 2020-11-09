<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $tabla='factura';
    protected $guarded=['numero'];
    protected $fillable=['fecha','cliente_id'];
    public function clientes()
    {
        return $this->belongsTo(Clientes::class);
    }
    public function detalle_factura()
    {
        return $this->hasMany(Detalle_factura::class);
    }
}

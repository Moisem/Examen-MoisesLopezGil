<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $tabla='clientes';
    protected $guarded=['id'];
    protected $fillable=['nombre'];
    public function factura()
    {
        return $this->hasMany(Factura::class);
    }
}

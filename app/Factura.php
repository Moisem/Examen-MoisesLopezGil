<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $tabla='factura';
    protected $guarded=['numero'];
    protected $fillable=['fecha','cliente_id'];
}

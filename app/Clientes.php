<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $tabla='clientes';
    protected $guarded=['id'];
    protected $fillable=['nombre'];
}

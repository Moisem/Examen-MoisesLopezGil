<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $tabla='producto';
    protected $guarded=['id'];
    protected $fillable=['nombre','precio','stock'];
}

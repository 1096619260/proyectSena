<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table ='categoria';

    protected $fillable =['nombre', 'categoria_id', 'cantidad', 'precio'];

    public $timestamps=false;
}

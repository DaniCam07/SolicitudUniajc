<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $primaryKey="id_programa";
    public $timestamps = false; 
    protected $fillable = ['id_director', 'nombre', 'facultad', 'direccion', 'telefono'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{


    protected $table = 'solicitudes';
    
    protected $primarykey = '$id_persona';
    
    public $timestamps=false;
    
}

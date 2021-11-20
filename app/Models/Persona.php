<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

    protected $primaryKey="id_persona";

    public $timestamps = false;
    protected $fillable = ['nombre', 'tipo_doc', 'numero_doc', 'correo', 'telefono'];
}

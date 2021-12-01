<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $primaryKey="id_estudiante";
    public $timestamps = false; 
    protected $fillable = ['id_persona', 'programa', 'grupo', 'semestre', 'jornada', 'tipo_usuario'];

}

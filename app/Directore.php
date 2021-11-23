<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directore extends Model
{
    protected $primaryKey="id_director ";
    public $timestamps = false; 
    protected $fillable = ['id_persona', 'profesion'];
}

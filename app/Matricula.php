<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    /**
    *
    *
    * @var boolean*/
    public $timestamps=true;
    const CREATED_AT = 'fecha';
    public $incrementing = false;
    public function Alumno()
    {
        return $this->belongsTo('App\Alumno','id_alumno');
    }

    public function Grado()
    {
        return $this->belongsTo('App\Grado','id_grado');
    }
}

<?php

namespace Proday;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    public $timestamps = false;
    public $table = "negocios";
    public $primaryKey = 'id_n'; // Clave primaria

    public function establecimientos(){
        return $this->hasMany('App\Establecimiento');
    }
}

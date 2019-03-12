<?php

namespace Proday;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
	public $timestamps = false;
	public $primaryKey = 'id_est'; // Clave primaria
	public $table = "establecimientos";
  protected $fillable = ['nombre_est', 'direccion_est', 'facebook_est', 'id_n1'];
}

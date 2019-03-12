<?php

namespace Proday;

use Illuminate\Database\Eloquent\Model;

class PromoDia extends Model
{
	public $timestamps = false;
	public $primaryKey = 'id_pd'; // Clave primaria
  public $table = "promo_dias";
}

<?php

namespace Proday;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
	public $table = "promos";
	public $primaryKey = 'id_p';
	protected $fillable = ['titulo_p', 'imagen_p', 'birthday_p', 'id_est1'];
}

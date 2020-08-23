<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
	protected $fillable = [
		'idcliente','idparteadversa','idramodireito','pi','mesanoreferencia','pigerado','nprocesso','objeto','descricaofatos','tiporeferencia','usuario',
	];
}

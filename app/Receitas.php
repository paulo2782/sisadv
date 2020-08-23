<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    protected $fillable = [
    	'id_processo','id_cliente','id_honorario','valor_honorario',
    ];
}

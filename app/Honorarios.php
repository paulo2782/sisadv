<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honorarios extends Model
{
    protected $fillable = [
    	'nome', 'valor_honorario',
    ];
}

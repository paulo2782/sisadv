<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
	protected $fillable = [
        'nome', 'cpf_cnpj', 'rg','profissao','estado_civil','fone','whatsapp','id_estado','id_cidade','endereco','numero','bairro','ramo_atuacao','responsavel','email',		
    ];
}


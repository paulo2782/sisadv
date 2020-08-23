<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioClientesController extends Controller
{
    public function relClientes(){
    	return view('relatorios/clientes/relClientes');
    }
}

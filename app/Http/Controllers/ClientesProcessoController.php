<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\ParteAdversas;
use App\RamoDireitos;
use App\Processos;
use DB;

class ClientesProcessoController extends Controller
{
	public function cadCliProc(Request $request){

		$idProcesso = $request->idProcesso;
    	$nProcesso  = $request->nProcesso;
    	$idCliente  = $request->idCliente;
    	$idParteAdv = $request->idParteAdv;
 		$idRamoDireito = $request->idRamoDireito;
    	$dados = Clientes::find($idCliente);
    	$dadosPadv = ParteAdversas::find($idParteAdv);
    	$dadosRamoDireito = RamoDireitos::find($idRamoDireito);
    	

    	$dadosProcesso = Processos::find($request->idProcesso);
    	
	   	return view('clientesProcessos/cadCliProc',compact('idProcesso','nProcesso','idCliente','dados','dadosPadv','dadosRamoDireito','dadosProcesso'));

 	}

// ABRIR PROCESSO
 	public function abrirProcesso(){
 		return view('clientesProcessos/abrirProcesso');
 	}


// SALVA ABRIR PROCESSO
 	public function salvarAbrirProcesso(Request $request){
 		$pi = 0;
		$dados = $request->all();
		$mesanoreferencia = $request->mesanoreferencia;
		
		$geraPI = DB::select("select * from processos where mesanoreferencia like $mesanoreferencia order by pi desc");
		

		$total = Processos::where('mesanoreferencia','LIKE',intval($mesanoreferencia))->count();
		
		if($total == 0){
			$pi = 1;
		}else{
			$pi = $geraPI[0]->pi+1;
		}

		Processos::create([	'idcliente' => $dados['idcliente'],
							'idparteadversa' => $dados['idparteadversa'],
							'idramodireito' => $dados['idramodireito'],
							'pi' => $pi,
							'mesanoreferencia' => $mesanoreferencia,
							'pigerado' => $pi.$mesanoreferencia]);

		
		return redirect('clientesProcessos/processosAbertos');

 	}
 		 

// BOTOES DE BUSCA
// CLIENTES
 	public function buscaClientes(Request $request){
 		 $result = $request->get('query');

		 $query = Clientes::where('NOME','LIKE',$result.'%')->get();
		 $dados = $query->all();

		 return view('clientesProcessos/listaClientes',compact('dados'));
 	}

	public function selecionaClientes($request){
		$dados = Clientes::find($request);
    	return view('clientesProcessos/abrirProcesso',compact('dados'));
    	
	}	

// PARTE ADVERSA
	public function buscaParteAdversa(Request $request){
 		 $result = $request->get('query');
		 $query = ParteAdversas::where('NOME','LIKE',$result.'%')->get();
		 $dadosPadv = $query->all();
		 $idCliente = $request->get('idCliente');

		 return view('clientesProcessos/listaParteAdversa',compact('dadosPadv','idCliente'));
		
 	}
	public function selecionaParteAdversa(Request $request){
		$dados     = Clientes::find($request->idCliente);
		$dadosPadv = ParteAdversas::find($request->id);
    	return view('clientesProcessos/abrirProcesso',compact('dadosPadv','dados'));
	}	

// RAMO DO DIRETO
	public function buscaRamoDireito(Request $request){
 		 $result = $request->get('query');
		 $query = RamoDireitos::all();

		 $dados = $request->get('idCliente');
		 $dadosPadv = $request->get('idParteAdv');

		 $dadosRamoDireito = $query->all();
		 return view('clientesProcessos/listaRamoDireito',compact('dados','dadosPadv','dadosRamoDireito'));
 	}


	public function selecionaRamoDireito(Request $request){

		$dados     = Clientes::find($request->idCliente);
		$dadosPadv = ParteAdversas::find($request->idParteAdv);
		$dadosRamoDireito = RamoDireitos::find($request->idRamoDireito);
		return view('clientesProcessos/abrirProcesso',compact('dados','dadosPadv','dadosRamoDireito'));
	}	

//////////////////
// BUSCA PROCESSO
//////////////////
//
	public function processosAbertos(Request $request){
		$busca = $request->busca;
		$processos = DB::select("select processos.id as idProcesso, processos.nprocesso as nProcesso,
								processos.pi as PI, processos.mesanoreferencia as MesAno, 
								processos.OBJETO, processos.tiporeferencia, 
								processos.pigerado as PIGERADO,
								ramodireitos.id as idRamoDireito,
								parteadversas.id as idParteAdv, parteadversas.nome as nomeParteAdversa, 
								clientes.id as idCliente, clientes.nome as NOME 

								from processos 
								INNER JOIN clientes      ON processos.idcliente      = clientes.id  
								INNER JOIN ramodireitos  ON processos.idramodireito  = ramodireitos.id
								INNER JOIN parteadversas ON processos.idparteadversa = parteadversas.id
								where processos.nprocesso like '$busca%' or
								processos.objeto like '%$busca%' or
								processos.pigerado like '%$busca%' or 
								clientes.nome like '%$busca%' or 
								parteadversas.nome like '%$busca%' 

								order by processos.id desc
		");
		
		 

   	 	return view('clientesProcessos/processosAbertos',compact('processos'));
	}	

	public function concluiProcesso(Request $request){
		$dados = $request->all();
		Processos::find($request->id)->update($dados);
		return redirect('clientesProcessos/processosAbertos');
	}
}


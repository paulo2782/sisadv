<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Honorarios;
use App\Receitas;

class ReceitaController extends Controller
{
  	public function BuscaHonProcesso($id){

      $processos = DB::select("select processos.id as idProcesso, processos.nprocesso as nProcesso,
                        processos.pi as PI, processos.mesanoreferencia as MesAno, 
                        processos.OBJETO, processos.tiporeferencia, 
                        ramodireitos.id as idRamoDireito,
                        parteadversas.id as idParteAdv, parteadversas.nome as nomeParteAdversa, 
                        clientes.id as idCliente, clientes.nome as NOME 
                        from processos 
                        INNER JOIN clientes      ON processos.idcliente      = clientes.id  
                        INNER JOIN ramodireitos  ON processos.idramodireito  = ramodireitos.id
                        INNER JOIN parteadversas ON processos.idparteadversa = parteadversas.id
                        where processos.id = $id
                        order by processos.id desc

      ");
      
      foreach ($processos as $idHonorario) {
        $idProcesso = $idHonorario->idProcesso; 
        $idCliente  = $idHonorario->idCliente;

      } 

      $soma = DB::table('receitas')->select('receitas.*')->where('receitas.id_processo','like',$id)->sum('receitas.valor_honorario');

      $receitas = DB::table('receitas')->join('honorarios','receitas.id_honorario','=','honorarios.id')
                                       ->select('receitas.*','honorarios.nome')
                                       ->where('receitas.id_processo','like',$id)
                                       ->paginate(5);
         
      return view('receita/BuscaHonProcesso',compact('processos','id','idProcesso','idCliente','receitas','soma'));
  
   }

    public function salvaReceita(Request $dados){
 		$id = $dados->id;
 		$msg = ' ';
 		$salva = $dados->all();
    	Receitas::create($salva);
		return back()->withInput(['salvar' => $msg]);
    }
}

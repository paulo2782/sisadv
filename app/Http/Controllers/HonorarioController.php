<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Honorarios;

class HonorarioController extends Controller
{
   public function cadHonorario(){
   		$dados = DB::table('honorarios')->select('*')->paginate(5);
   		return view('honorarios/cadHonorario',compact('dados'));
   }

   public function salvaHonorario(Request $dados){
   	$dados = $dados->all();
   	Honorarios::create($dados);

      $mensagem = "SALVO COM SUCESSO!";
   	return redirect('honorarios/cadHonorario')->with('salva',$mensagem);
   }

   public function excluiHonorario($id){
   	$id = Honorarios::find($id);
   	$id->delete();

   	$mensagem = "EXCLUÍDO COM SUCESSO!";
   	return redirect('honorarios/cadHonorario')->with('deleta',$mensagem);
   }

   public function listaHonorario(){
      $dados = Honorarios::all();
      return response()->json($dados);
   }
   
   public function resumoHonorario($id_processo){
      $resumo = DB::table('receitas')->where('id_processo','=',$id_processo)->sum('valor_honorario');
      dd($resumo);
   }
}

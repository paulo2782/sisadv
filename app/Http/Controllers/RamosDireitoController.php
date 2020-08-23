<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RamoDireitos;

class RamosDireitoController extends Controller
{
    public function index(){
        $dados = RamoDireitos::all();
    	return view('ramoDireito/cadRamoDireito',compact('dados'));       

    }

    public function salvaRamoDireito(Request $request){
     	$dados=$request->all();
     	RamoDireitos::create($dados);
        $dados = RamoDireitos::all();
    	return redirect('ramoDireito/cadRamoDireito');
    }

    public function editarRamoDireito($dado){
        $registro=RamoDireitos::find($dado);
        $dados=RamoDireitos::find($registro);
        return view('ramoDireito/edtRamoDireito',compact('registro','dados'));
    }
    
    public function alterarRamoDireito(Request $request, $id){
        $dados = $request->all();
        RamoDireitos::find($id)->update($dados);
        return redirect('ramoDireito/cadRamoDireito');
    }

    public function listaRamoDireito(){
    	$dados = RamoDireitos::all();
    	return view('ramoDireito/listaRamoDireito',compact('dados'));
    }


    public function excluiRamoDireito($dados){

         $id = RamoDireitos::find($dados);
         $id->delete();

         return redirect('ramoDireito/cadRamoDireito');
    }
 

}

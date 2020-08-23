<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParteAdversas;

class ParteAdversaController extends Controller
{
     public function index(){
     	return view('parteAdversa/cadParteAdversa');

    }
    public function conParteAdversa(Request $request){
   		 // $dados = ParteAdversas::get();
      $result = $request->get('query');
      $dados = ParteAdversas::where('NOME','LIKE',$result.'%')->
                         orwhere('CPF_CNPJ','LIKE',$result.'%')->
                         orwhere('FONE','LIKE',$result.'%')->
                         orwhere('WHATSAPP','LIKE','%'.$result.'%')->paginate(5);      
     return view('parteAdversa/conParteAdversa',compact('dados','result'));
    }
    public function salvaParteAdversa(request $dados){
    	$dado = $dados->all();
    	ParteAdversas::create($dados->all());
    	return view('parteAdversa/cadParteAdversa');
    }
	public function excluirParteAdversa($dado){
		$id = ParteAdversas::find($dado);
	    $id->delete();
	    return redirect('parteAdversa/conParteAdversa');
    }    
	public function editarParteAdversa($dado){
		$registro = ParteAdversas::find($dado);
	    return view('parteAdversa/edtParteAdversa',compact('registro'));
    }    
    public function alterarParteAdversa(Request $req, $id){
		$dados = $req->all();
		ParteAdversas::find($id)->update($dados);
		return redirect('parteAdversa/conParteAdversa');
	}
	public function listaParteAdversa(Request $request){
    	$result = $request->get('query');
    	$query = ParteAdversas::where('NOME','LIKE',$result.'%')->
                              orwhere('CPF_CNPJ','LIKE',$result.'%')->
                              orwhere('FONE','LIKE',$result.'%')->
                              orwhere('WHATSAPP','LIKE','%'.$result.'%')->get();

    	$dados = $query->all();
        
        return view('parteAdversa/listaParteAdversa',compact('dados'));
	}	
    public function visParteAdversa($dado){
        $registro = ParteAdversas::find($dado);
        return view('parteAdversa/visParteAdversa',compact('registro'));
    }    



}

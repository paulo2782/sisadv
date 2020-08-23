<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
     public function index(){
    	return view('clientes/cadCliente');
    }

    public function consultaCliente(Request $request){
            $result = $request->get('query');
            $dados = Clientes::where('NOME','LIKE',$result.'%')->
                               orwhere('CPF_CNPJ','LIKE',$result.'%')->
                               orwhere('FONE','LIKE',$result.'%')->
                               orwhere('WHATSAPP','LIKE','%'.$result.'%')->paginate(5);
 
        return view('clientes/conCliente',compact('dados','result'));               
    }

    
    public function salvaCliente(request $dados){
    	$dado = $dados->all();
        // dd($dado);
    	Clientes::create($dados->all());
    	return back();
    }
	public function excluirCliente($dado){
		$id = Clientes::find($dado);
	    $id->delete();
	    return redirect('clientes/conCliente');
    }    
	public function editarCliente($dado){
		$registro = Clientes::find($dado);
	    return view('clientes/edtCliente',compact('registro'));
    }    
    public function alterarCliente(Request $req, $id){
		$dados = $req->all();

		Clientes::find($id)->update($dados);
		return redirect('clientes/conCliente');
	}

    public function visCliente($dado){
        $registro = Clientes::find($dado);
        return view('clientes/visCliente',compact('registro'));
    }    	
}

 
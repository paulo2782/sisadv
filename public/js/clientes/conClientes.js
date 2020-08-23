$(document).ready(function(){
	$('.btnExcCliente').click(function(id = this){
		
		if(confirm('Confirma Deletar Registro ?')) 
	 	{
	 		alert('Registro Deletado!');
	 	}else{
			return false;
	 	}
	});
	$('.btnAltCliente').click(function(id = this){
		
		if(confirm('Confirma Alterar Registro ?')) 
	 	{
	 	 
	 	}else{
			return false;
	 	}
	});
});
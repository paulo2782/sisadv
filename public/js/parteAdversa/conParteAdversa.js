$(document).ready(function(){
	$('.btnExcParteAdversa').click(function(id = this){
		
		if(confirm('Confirma Deletar Registro ?')) 
	 	{
	 		alert('Registro Deletado!');
	 	}else{
			return false;
	 	}
	});
	$('.btnAltParteAdversa').click(function(id = this){
		
		if(confirm('Confirma Alterar Registro ?')) 
	 	{
	 	 
	 	}else{
			return false;
	 	}
	});
});
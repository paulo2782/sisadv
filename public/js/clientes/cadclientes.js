$(document).ready(function(){

// MASCARA DE CAMPO
 
    $("#fone").mask("(99)99999-9999");
    $("#whatsapp").mask("(99)99999-9999");


// FUNÇÃO BOTÃO

	 $('#btnSalvar').click(function(){
	 	if(confirm('Confirma Salvar Registro ?')) 
	 	{
	 		// alert('Registro Salvo!');
	 	}else{
			return false;
	 	}
	 });
});


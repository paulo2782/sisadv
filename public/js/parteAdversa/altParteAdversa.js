$(document).ready(function(){

// MASCARA DE CAMPO
 
    $("#fone").mask("(99)99999-9999");
    $("#whatsapp").mask("(99)99999-9999");


// FUNÇÃO BOTÃO

	 $('#btnAtualizar').click(function(){
	 	if(confirm('Confirma Atualizar Registro ?')) 
	 	{
	 		
	 	}else{
			return false;
	 	}
	 });
});

	estadocivil = document.getElementById('ECIVIL').value;
	document.getElementById('estado_civil').value = estadocivil;

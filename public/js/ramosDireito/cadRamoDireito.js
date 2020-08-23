
$(document).ready(function(){
	
	// FUNÇÃO BOTÃO

	$('#btnSalvar').click(function(){
		if(confirm('Confirma Salvar Registro ?'))
		{
			alert('Registro Salvo!');
		}else{
			return false;
 		}
 	});
 	$('.btnDeletaRamo').click(function(){
		if(confirm('Confirma Apagar Registro ?'))
		{
			
		}else{
			return false;
 		}
 	});
 	$('.btnAlteraRamo').click(function(){
		if(confirm('Confirma Alterar Dados do Registro ?'))
		{
			
		}else{
			return false;
 		}
 	});


});


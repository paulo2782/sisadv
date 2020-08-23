<tr>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach ($dados as $dado)
	<td><p>{{$dado->nome}}</td>
	<td><p>{{$dado->valor_honorario}}</td>
	<td><a href="{{ route('excluiHonorario',$dado->id) }}"> <span class="fa fa-trash badge-pill badge-danger btnDeletaHonorario" title="Apagar Registro"> </span> </a>
	<td><a href="#"> <span class="fa fa-edit badge-pill badge-warning btnAlteraRamo" title="Editar Registro"> </span> 
	<tr> 

@endforeach
<br>
{{ $dados->links() }}

<!-- MENSAGEM DE SUCESSO  -->
@if(Session::get('deleta'))
	<div class="alert alert-success">
		<a href='#' class='close' data-dismiss='alert' aria-label='close' id='sucesso'>&times;</a>
        	<strong>Sucesso!</strong>
        			Registro Excluído!
    </div>
@endif
@if(Session::get('salva'))
	<div class="alert alert-warning">
		<a href='#' class='close' data-dismiss='alert' aria-label='close' id='sucesso'>&times;</a>
        	<strong>Sucesso!</strong>
        			Registro Salvo!
    </div>
@endif


<script>
$('.btnDeletaHonorario').click(function(event) {
	/* Act on the event */
	if(confirm('Confirma a exclusão do Honorário ?')){

	}else{
		return false;
	}

});
</script>


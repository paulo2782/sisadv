<tr>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach ( $dados as $dado )
	<td><p>{{ $dado->NOME }}</td>
	<td><p>{{ $dado->CPF_CNPJ }}</td>			        		
	<td><p>{{ $dado->FONE }}</td>
	<td><p>{{ $dado->WHATSAPP }}</td>
	<td><a href="{{ route('excluirParteAdversa',$dado->id) }}"> 	<span class="fa fa-trash badge-pill badge-danger btnExcParteAdversa" title="Apagar Registro"> </span> 
	<td><a href="{{ route('edtParteAdversa',$dado->id) }}"> 		<span class="fa fa-edit badge-pill badge-warning btnAltParteAdversa" title="Editar Registro"> </span> 
	<td><a href="{{ route('visParteAdversa',$dado->id) }}">		<span class="fa fa-check badge-pill badge-success btnCheckParteAdversa" title="Seleciona Registro"> </span> 
<tr> 
@endforeach
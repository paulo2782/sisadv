@foreach ( $dados as $dado )
	<td><p>{{ $dado->NOME }}</td>
	<td><p>{{ $dado->CPF_CNPJ }}</td>			        		
	<td><p>{{ $dado->FONE }}</td>
	<td><p>{{ $dado->WHATSAPP }}</td>
	<td><a href="{{ route('excluirCliente',$dado->id) }}"> 	<span class="fa fa-trash badge-pill badge-danger btnExcCliente" title="Apagar Registro"> </span> </a>
	<td><a href="{{ route('edtCliente',$dado->id) }}"> 		<span class="fa fa-edit badge-pill badge-warning btnAltCliente" title="Editar Registro"> </span> </a>
	<td><a href="{{ route('visCliente',$dado->id) }}">		<span class="fa fa-check badge-pill badge-success btnCheckParteAdversa" title="Seleciona Registro"> </span> </a>
<tr>
@endforeach

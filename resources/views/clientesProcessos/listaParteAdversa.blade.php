<tr>
$idCliente = $idCliente; 

@foreach ( $dadosPadv as $dadoPadv )
	<td>{{ $dadoPadv->NOME }}</td>
	<td>{{ $dadoPadv->CPF_CNPJ }}</td>			        		
	<td><a href="{{ route('selecionaParteAdversa',['idParteAdversa' => $dadoPadv->id, 'idCliente' => $idCliente]) }}"><span class="fa fa-check badge-pill badge-success" title="Seleciona Registro"> </span> </td>
<tr>
@endforeach



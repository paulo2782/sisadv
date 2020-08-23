 <tr>

@foreach ( $dados as $dado )
	<td>{{ $dado->NOME }}</td>
	<td>{{ $dado->CPF_CNPJ }}</td>			        		
	<td><a href="{{ route('selecionaClientes',$dado->id) }}"><span class="fa fa-check badge-pill badge-success btnCheckClienteProcesso" title="Seleciona Registro"> </span> </td>
<tr>
@endforeach
 
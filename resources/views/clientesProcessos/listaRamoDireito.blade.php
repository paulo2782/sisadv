
<tr>

@foreach ( $dadosRamoDireito as $dadoRamoDireito )
	
	<td>{{ $dadoRamoDireito->NOME }}</td>
	
	<td><a href="{{ route('selecionaRamoDireito',['idCliente'=>$dados,'idParteAdv'=>$dadosPadv, 'idRamoDireito'=>$dadoRamoDireito->id]) }}"><span class="fa fa-check badge-pill badge-success" title="Seleciona Registro"> </span> 
<tr>
@endforeach



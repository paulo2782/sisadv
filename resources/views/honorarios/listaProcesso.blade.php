<head>
   <script src="https://kit.fontawesome.com/57f02d201e.js"></script>
</head>
@foreach($processos as $iProcesso)
	@php 
	$idProcesso 	= $iProcesso->idProcesso;
	$idCliente 		= $iProcesso->idCliente;
	$idParteAdv 	= $iProcesso->idParteAdv;
	$idRamoDireito 	= $iProcesso->idRamoDireito;
	$a = $iProcesso->tiporeferencia

	@endphp

	<td>{{ $pi = $iProcesso->PI }}{{ $mesano  = $iProcesso->MesAno }}</td>
	<td>{{ $iProcesso->nProcesso }}</td>
 	<td>{{ $iProcesso->NOME }}</td>
 	<td>{{ $iProcesso->nomeParteAdversa }}</td>
 	<td>{{ $nObjeto = $iProcesso->OBJETO }}</td>
	 <tr>
@endforeach



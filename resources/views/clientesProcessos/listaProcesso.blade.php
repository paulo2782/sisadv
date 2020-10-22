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

	<!-- <td>{{ $pi = $iProcesso->PI }}{{ $mesano  = $iProcesso->MesAno }}</td> -->
	<td>{{ $iProcesso->PIGERADO }}
	<td>{{ $iProcesso->nProcesso }}</td>
 	<td>{{ $iProcesso->NOME }}</td>
 	<td>{{ $iProcesso->nomeParteAdversa }}</td>
 	<td>{{ $nObjeto = $iProcesso->OBJETO }}</td>
 	
 	<td><a href="{{ route('cadCliProc',	[
 		'id'  			=> $idProcesso,
 		'pi' 			=> $pi, 
 		'mesano'  		=> $mesano, 
 		'idCliente'  	=> $idCliente, 
 		'idParteAdv' 	=> $idParteAdv, 
 		'idRamoDireito' => $idRamoDireito
 		 ]) }}">
 		 <span class="fas fa-check badge-pill badge-success" title="Seleciona Processo"> </span> </td></a>
 	<!-- <td><a href="{{ route('BuscaHonProcesso',  $iProcesso->idProcesso) }}"><span class="fas fa-money-check-alt badge-pill badge-warning " title="Honorários"></span>  -->
 <tr>
@endforeach

<script>
</script>
<tr>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach ($dados as $dado)
	<td><p>{{$dado->NOME}}</td>
	<td><a href="{{ route('excluiRamoDireito',$dado->id) }}"> <span class="fa fa-trash badge-pill badge-danger btnDeletaRamo" title="Apagar Registro"> </span> </a>
	<td><a href="{{ route('editarRamoDireito',$dado->id) }}"> <span class="fa fa-edit badge-pill badge-warning btnAlteraRamo" title="Editar Registro"> </span> 
	<!-- <td><a href="#"> <span class="fa fa-check badge-pill badge-success btnCheckRamo" title="Seleciona Registro"> </span>	  -->
	<tr> 
@endforeach
<script type="text/javascript" src="{{ asset('js/ramosDireito/cadRamoDireito.js') }}"></script>



@include('/index')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>


<form name="addHonorario" action="{{ route('salvaReceita') }}" method="POST">
@csrf

 
@if(old('salvar'))

<div class="alert alert-success">
		<a href='#' class='close' data-dismiss='alert' aria-label='close' id='sucesso'>&times;</a>
        	<strong>Sucesso!</strong>
        			Receita Honorário Incluída!
    </div>
@endif

<script type="text/javascript">
setTimeout(function(){
	$('#sucesso').alert('close');
},2000);
</script>

<input type="hidden" name="id_processo" value="{{ $idProcesso }}">
<input type="hidden" name="id_cliente" value="{{ $idCliente }}">

<div class="container">
	<input type="hidden"  value="{{$id}}" name="id">
	<div class="row">
		<div class="col-sm|md|lg|xl-1-12|auto form-control">
			<center><strong><h3><span id="Titulo">HONORÁRIOS</span></h3></strong></center>			
		</div>
	</div>	
	<br>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>PI º</th>
				<th>PROCESSO Nº</th>
				<th>CLIENTE</th>
				<th>PARTE ADVERSA</th>
				<th>OBJETO</th>		
		</tr>
		</thead>
	  	<tbody id="listaProcessos">
			<tr> 
				@include('honorarios/listaProcesso')

			</tr>
	  	</tbody>
	</table>
	<hr>

	<div class="card">
		<div class="card-block">
			<h4 class="card-title"></h4>
			<div class="row">
				<div class="col-lg-4">
					<strong>Tipo Honorário</strong>
					<input type="hidden" name="id_honorario" id="id_honorario">
					<select class="form-control tipo_honorario">
						<option selected>Selecione o Honorário</option>
					</select>

		 
				</div>
				<div class="col-lg-4">
					<strong>Valor R$</strong>
					<input class="form-control" type="text" id="valor_honorario" name="valor_honorario">
				</div>
				<div class="col-lg-4">
					<br>
					<button type="submit" class="btn btn-success form-control" title="ADICIONAR HONORÁRIO" id="addHonorario">ADICIONAR HONORÁRIO</button>
				</div>
			</div>
		</div>
		<br>
	</div>
	<div class="card">
		<div class="card-block">
			<h4 class="card-title"></h4>
			<div class="row">
				<div class="col-lg-12">
					<strong>HONORÁRIOS</strong>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>SERVICO</th>
								<th>VALOR R$</th>
							</tr>
						</thead>
						<tbody>
							<tr>
					
							@foreach($receitas as $receita)
								<td> {{ $receita->nome }}</td>
								<td> {{ $receita->valor_honorario }} </td>
								 
							 <tr>
							 @endforeach
							 <hr>
							 	<td><strong>Total R$ </strong></td>
							 	<td><span style="color:red">{{ $soma }} </span></td>
							 	<tr>

							 	<td>{{ $receitas->links() }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<button type="button" class="btn btn-danger form-control" title="FECHAR HONORÁRIOS" data-toggle="modal" data-target="#modalFinaliza">PAGAMENTO</button>	
	</div>

<!-- MODAL PAGAMENTO  -->
    <div class="bd-example">
		<div class="modal fade" id="modalFinaliza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3>SISADV - PAGAMENTO	</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="exampleModalLabel"></h4>
					</div>
					<div class="modal-body">
						<form>

							<div class="form-group">
							<h4>
								<table class="table table-responsive">
									<tbody>
										<tr>
											<td> <label class="control-label"><strong>TOTAL R$</strong></label> </td>
											<td> <span  class="label label-default" style="color:red" id="total">{{ $soma }} </span> </td>
										</tr>
										<tr>
											<td> <label class="control-label">DINHEIRO</label> </td>
											<td> <input type="text" class="form-control" id="dinheiro" value="0.00" onclick="this.select()"> </td>
										</tr>
										<tr>
											<td id="strLabel"></td>
											<td id="diferenca" style="color:red;font-style: bold"></td>
										</tr>
									</tbody>
								</table>
							</h4>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary form-control" id="finaliza" data-dismiss="modal">FINALIZA</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- FORMA DE PARCELAMENTO -->

	<!-- Modal -->
	<div class="modal fade" id="modalParcelamento" role="document">
	<div class="container">
		<div class="modal-dialog ">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header"> 
	        <h4>SISADV - PARCELAMENTO</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title"></h4>
	        </div>
	        <div class="modal-body">
	          <table class="table table-responsive">
          		<tr>
          			<td><h4>TOTAL R$</h4></td>
          			<td><h4><span id='iTotal' style="color:blue;font-style: bold"></span></h4></td>
          		</tr>
          		<tr>
          			<td><h4>PAGOU R$</h4></td>
          			<td><h4><span id='pagou' style="color:blue;font-style: bold"></span></h4></td>
          		</tr>
          		<tr>
          			<td><h4>DIFERENÇA R$</h4></td>
          			<td><h4><span id='difParcelamento' style="color:red;font-style: bold"></span></h4></td>
          		</tr>
	          </table>
	        </div>

			<div class="col-lg-12">
	        	<select class="form-control" name="forma_pagamento" id="forma_pagamento">
	        		<option selected>Selecione a forma de pagamento</option>
		        	<option value="1">Cheque</option>
		        	<option value="2">Cartão</option>
		        	<option value="3">Boleto</option>
		        </select>
			</div>
	        
	        <div class="clear">&nbsp</div>

			<div class="col-lg-12">	Qnt. Parcelas 
	        	<input type="number" min="1" value="1" step="1" id="qnt_parcela" name="qnt_parcela" class="form-control">
			</div>

	        <div class="col-lg-12">	Data 1º Parcela </div>
			<div class="col-lg-12">	
				<input type="date" value="{{ date('Y-m-d') }}" id="vencimentoP1" class="form-control">
			</div>
 
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-danger form-control"  id="geraParcelamento" data-dismiss="modal">GERAR PARCELAMENTO</button>
	        	<button type="button" class="btn btn-warning form-control" data-dismiss="modal" id="voltarPagamento">Voltar</button>
	      	</div>	      
	    </div>
	</div>
	</div> 
</div>
	

<!-- RESUMO PARCELAMENTO -->

<!-- The Modal -->
<div class="modal" id="resumoParcelamento">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">SISADV - RESUMO PARCELAMENTO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success form-control" data-dismiss="modal">Finaliza</button>
        <button type="button" class="btn btn-warning form-control" data-dismiss="modal" id="voltarParcelamento">Voltar</button>
      </div>

    </div>
  </div>
</div>
</form>

<script>
jQuery(document).ready(function($) {
	$('#valor_honorario').mask('###0.00', {reverse: true});
	$('#dinheiro').mask('###0.00', {reverse: true});
	$('#addHonorario').click(function(event) {
		/* Act on the event */
		if(confirm('Incluir Honorário?')){

		}else{
			return false;
		}
	});

// MONTA SELECT HONORARIO
	jQuery.ajax({
	  url: "{{ route('listaHonorario') }}",
	  method: 'GET',
	  datatype: 'json',
 	  data: {},
	  success: function(data) {
	    dados = JSON.stringify(data);
	    for ( i = 0 ; i < dados.length; i++){
	    	$('.tipo_honorario').append($('<option value='+data[i].id+'-'+data[i].valor_honorario+'> '+data[i].nome+' </option>'));
	    }
	  },
	  error: function(xhr, textStatus, errorThrown) {
	     alert('Erro'+errorThrown);
	  }
	});

//************************************************************

	$('.tipo_honorario').change(function(event) {
		/* Act on the event */
		event = this.value;
		
		dValor = event.indexOf("-")+1;
		iValor = event.length;
		strValor = event.substr(dValor,iValor);

		dIDHonorario = event.indexOf("-");
		iIDHonorario = event.length;
		strHonorario = event.substr(0,dIDHonorario);

		valor_honorario = document.getElementById('valor_honorario');
		valor_honorario.value = strValor;

		document.getElementById('id_honorario').value = strHonorario;
		
	});

	$('#dinheiro').blur(function(event) {
		/* Act on the event */
		total 	= document.getElementById('total');
		dinheiro= document.getElementById('dinheiro');
		diferenca = parseFloat(total.innerHTML-dinheiro.value).toFixed(2);

		if(diferenca > 0){ //** PARCELAMENTO
			document.getElementById('strLabel').innerHTML  = 'Falta R$ ';
			document.getElementById('diferenca').innerHTML = diferenca;
		}else{
			document.getElementById('strLabel').innerHTML  = 'Troco R$ ';
			document.getElementById('diferenca').innerHTML = diferenca;
		}
	});

	$('#finaliza').click(function(event) {
		/* Act on the event */
 		if(diferenca > 0){ 
 			document.getElementById('iTotal').innerHTML			= parseFloat(total.innerHTML).toFixed(2);
 			document.getElementById('pagou').innerHTML 			= parseFloat(dinheiro.value).toFixed(2);
			document.getElementById('difParcelamento').innerHTML= diferenca;
			$('#modalParcelamento').modal();

		}
		if(diferenca <= 0){
			
		}

	});

	$('#geraParcelamento').click(function(event) {
		$('#resumoParcelamento').modal();
	});

	$('#voltarPagamento').click(function(event) {
		/* Act on the event */
		$('#modalFinaliza').modal();
	});

	$('#voltarParcelamento').click(function(event) {
		/* Act on the event */
		$('#modalParcelamento').modal();
	});

});
</script>
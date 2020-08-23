@include('/index')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<form method="post" action="{{ route('salvarAbrirProcesso') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container">
<div class="card">
	<div class="card-block">
		<div class="container">				
			<div class="row">
				<div class="col-sm|md|lg|xl-1-12|auto form-control">
					<center><b>ABRIR PROCESSO</b></center>
				</div>
				<div class="col-lg-2 ">
					DATA ABERTURA
					<input type="text" class="form-control" value="{{ date('d-m-Y') }}" readonly="true"> 
					<!-- GERANDO MES ANO REFERENCIA  -->
					<input type="hidden" class="form-control" value="{{ date('mY') }}" name="mesanoreferencia" > 
				</div>

				<div class="col-lg-12 ">
					CLIENTE
					<div class="input-group">
						<input type="hidden" class="form-control" placeholder="Selecione o Cliente..." value="@isset($dados) {{ $dados->id }} @endisset" id="IDCLIENTE" name="idcliente">
						<input type="text" class="form-control" placeholder="Selecione o Cliente..." value="@isset($dados) {{ $dados->NOME }} @endisset" name="nome" id="nome" readonly="true" >
						<span class="input-group-btn">

							<button class="btn btn-secondary fa fa-search" type="button" title="BUSCA CLIENTES" id="buscaClientes"
							data-toggle="modal" data-target="#modalBuscaClientes-1"></button>
						</span>
					</div>
				</div>
				<div class="col-lg-12">
					PARTE ADVERSA
					<div class="input-group">
						<input type="hidden" class="form-control" placeholder="Selecione a Parte Adversa..." value="@isset($dadosPadv) {{ $dadosPadv->id }} @endisset" id="IDPARTEADV" name="idparteadversa" readonly="true">
				
						<input type="text" class="form-control" placeholder="Selecione a Parte Adversa..." value="@isset($dadosPadv) {{ $dadosPadv->NOME }} @endisset" id="ParteAdversa" readonly="true">
						<span class="input-group-btn">

							<button class="btn btn-secondary fa fa-search" type="button" title="BUSCA PARTE ADVERSA" id="buscaParteAdversa"
							data-toggle="modal" data-target="#modalBuscaParteAdversa-1"></button>
						</span>
					</div>
				</div>		
				<div class="col-lg-12">
					RAMO DO DIREITO
					<div class="input-group">
						<input type="hidden" class="form-control" placeholder="Selecione Ramo do Direito..." value="@isset($dadosRamoDireito) {{ $dadosRamoDireito->id }} @endisset" name="idramodireito" readonly="true">

						<input type="text" class="form-control" placeholder="Selecione Ramo do Direito..." value="@isset($dadosRamoDireito) {{ $dadosRamoDireito->NOME }} @endisset" id="IDRAMODIREITO" readonly="true">

						<span class="input-group-btn">

							<button class="btn btn-secondary fa fa-search" type="button" title="BUSCA RAMO DO DIREITO" id="buscaRamoDireito"
							data-toggle="modal" data-target="#modalBuscaRamoDireito-1"></button>
						</span>
					</div>
				</div>

				<div class="col-lg-12 ">&nbsp</div>		
				<div class="col-lg-12 ">
					<button type="submit" class="btn btn-primary form-control" id="btnAbrir">ABRIR PROCESSO</button>
				</div>
				<div class="col-lg-12 ">&nbsp</div>
			</div>
		</div>
	</div>
</div>
<br>
 
<!-- BUSCA CLIENTES MODAL -->
<div class="modal fade" id="modalBuscaClientes-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<center><h5 class="modal-title">Busca Clientes</h5></center>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Fechar</span>
				</button>
				 
			</div>
			<div class="modal-body">

				<input type="text" class="form-control" placeholder="Busca..." id="buscaClientesTexto">
				
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>NOME</th>
						<th>CPF / CNPJ</th>
					</tr>
				</thead>
			  	<tbody id="listaClientes">
					 
			  	</tbody>
			</table>				
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- BUSCA PARTE ADVERSA MODAL -->
<div class="modal fade" id="modalBuscaParteAdversa-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<center><h5 class="modal-title">Busca Parte Adversa</h5></center>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Fechar</span>
				</button>
				 
			</div>
			<div class="modal-body">

				<input type="text" class="form-control" placeholder="Busca..." id="buscaParteAdversaTexto">
				
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>NOME</th>
						<th>CPF / CNPJ</th>
					</tr>
				</thead>
			  	<tbody id="listaParteAdversa">
					 
			  	</tbody>
			</table>				
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- BUSCA RAMO DIREITO -->
<div class="modal fade" id="modalBuscaRamoDireito-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<center><h5 class="modal-title">Busca Ramo do Direito</h5></center>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Fechar</span>
				</button>
				 
			</div>
			<div class="modal-body">

				<input type="text" class="form-control" placeholder="Busca..." id="buscaRamoDireitoTexto">
				
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>NOME</th>
					</tr>
				</thead>
			  	<tbody id="listaRamoDireito">
					 
			  	</tbody>
			</table>				
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
 
</form>

<script>
// AJAX BUSCA CLIENTES
$(document).ready(function() {
	$('#buscaClientesTexto').keyup(function(){
		query = document.getElementById('buscaClientesTexto').value;
		$.ajax({			
			url: "{{ route('buscaClientes') }}",
			method: 'GET',
			data:{query:query},	
			success:function(data){
				$('#listaClientes').html(data);
			},
			error:function(errorThrown){
				alert('erro');
			}
		}) 
	});



// AJAX BUSCA PARTE ADVERSA
	$('#buscaParteAdversaTexto').keyup(function(){
		idCliente = document.getElementById('IDCLIENTE').value;
		query = document.getElementById('buscaParteAdversaTexto').value;
		$.ajax({			
			url: "{{ route('buscaParteAdversa') }}",
			method: 'GET',
			data:{query:query,
				  idCliente:idCliente},
			success:function(data){
				$('#listaParteAdversa').html(data);
			}
		}) 
	});

 // AJAX BUSCA RAMO DO DIREITO

	$('#buscaRamoDireitoTexto').keyup(function(){
		idCliente = document.getElementById('IDCLIENTE').value;
		idParteAdv = document.getElementById('IDPARTEADV').value;

		query = document.getElementById('buscaRamoDireitoTexto').value;
		$.ajax({			
			url: "{{ route('buscaRamoDireito') }}",
			method: 'GET',
			data:{query:query,
				idCliente:idCliente,
				idParteAdv:idParteAdv},
			success:function(data){
				$('#listaRamoDireito').html(data);
			}
		}) 

	});


//////////////////
/// ABRIR O PROCESSO
	$('#btnAbrir').click(function(){
		if(confirm('Confirma Abrir Processo ?')) 
	 	{
	 		alert('Processo Aberto!');
	 	}else{
			return false;
	 	}
	 });
//////////////////
///////////////////////////////////////////////////////////////////////////////	

	IDCLIENTE 	 	= document.getElementById('IDCLIENTE');
	ParteAdversa 	= document.getElementById('ParteAdversa');
	RamoDireito     = document.getElementById('IDRAMODIREITO');
	btnAbrir 		= document.getElementById('btnAbrir');

	if(IDCLIENTE.value == '' || ParteAdversa.value == '' || RamoDireito.value == ''){
		btnAbrir.disabled = true;
	}else{
		btnAbrir.disabled = false;

	}

	
	nome = document.getElementById('nome').value;
	ParteAdversa = document.getElementById('ParteAdversa').value;

	if(nome.length > 0 && ParteAdversa.length > 0){
		buscaRamoDireito.disabled = false;
	}else{
		buscaRamoDireito.disabled = true;
	}

});	
</script>
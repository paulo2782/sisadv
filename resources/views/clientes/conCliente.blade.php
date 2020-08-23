@include('index')
<div class="container">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 form-control">
						<center><b>CONSULTA CLIENTES</b></center>			
					</div>
				</div>
				<br>

				<input type="text" id="buscaClienteTexto" class="form-control" placeholder="Busca" >
				
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>NOME</th>
							<th>CPF / CNPJ</th>
							<th>TELEFONE</th>
							<th>WHATSAPP</th>
						</tr>
					</thead>

				  	<tbody id="listaClientes">
						<tr> 

							@include('clientes/listaClientes')
 						</tr>
				  	</tbody>
				</table>
			</div>
		</div>
	</div>
<p align="center">{{ $dados->appends(['query'=>$result])->links() }}</p>
</div>

</form>

<script type="text/javascript" src="{{ asset('js/clientes/conClientes.js') }}"></script>
<script>
$(document).ready(function() {
	$('#buscaClienteTexto').keyup(function(){

 		query = document.getElementById('buscaClienteTexto').value;
		location.href='conCliente?query='+query+'&page=1';
	});
});
</script> 
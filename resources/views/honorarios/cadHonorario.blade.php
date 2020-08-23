
@include('/index')
<form name="cadHonorario" action="{{ route('salvaHonorario') }}" method="POST">
@csrf
<div class="container">
	<div class="card ">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">
						<center><strong>CADASTRO HONORARIOS</strong></center>			
					</div>
				</div>

				<div class="row">
				<div class="col-lg-6">
					HONORÁRIO
					<div class="input-group">
						<input type="text" id="nome" name="nome" placeholder="Digite o nome do ramo" class="form-control">
					</div>
				</div>
				<div class="col-lg-6">
					VALOR R$
					<div class="input-group">
						<input type="text" id="valor_honorario" name="valor_honorario" class="form-control">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">&nbsp</div>
			<div class="col-lg-12">
	 			<button type="submit" class="btn btn-success form-control" title="Salvar Registro" id="btnSalvar" href="">SALVAR</button>
	 		</div>
	 	</div>
	</div>
	</form>
	<br>

	<form name="ListaRamoDireito" method="get">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">
						<center><strong>LISTA HONORÁRIOS</strong></center>			
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-block">
			
			<table class="table table-responsive">
					<thead>
						<tr>
							<th>HONORÁRIO</th>
							<th>VALOR R$</th>
						</tr>
					</thead>
					<tbody id="listaHonorario">
						<tr>
							@include('honorarios/listaHonorario')
						</tr>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script>
jQuery(document).ready(function($) {
	setTimeout(function() {
        $("#sucesso").alert('close');
    }, 2000);

	$('#btnSalvar').click(function(event) {
		if(confirm('Deseja Salvar Honorário ?')){

		}else{
			return false;
		}
	});

	$('#valor_honorario').mask('###0.00', {reverse: true});

});	
 </script>

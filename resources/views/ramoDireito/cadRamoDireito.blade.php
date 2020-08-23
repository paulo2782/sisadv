
@include('/index')
<form name="cadRamoDireito" action="{{ route('salvaRamoDireito') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="container">
	<div class="card ">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">
						<center><b>CADASTRO RAMO DO DIREITO</b></center>			
					</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					NOME
					<div class="input-group">
						<input type="text" id="nome" name="nome" placeholder="Digite o nome do ramo" class="form-control">
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
						<center><b>RAMO DO DIREITO</b></center>			
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
							<th>NOME DO RAMO</th>
						</tr>
					</thead>
					<tbody id="listaRamosDireito">
						<tr>
						 @include('ramoDireito/listaRamoDireito')
						</tr>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>
 
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

 

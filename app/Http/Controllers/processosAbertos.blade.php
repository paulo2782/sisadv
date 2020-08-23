@include('/index')
<div class="card">
	<div class="card-block">
		<div class="container">				
			<div class="row">
				<div class="col-sm|md|lg|xl-1-12|auto form-control">
					<center><b>PROCESSOS ABERTOS</b></center>
				</div>
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>Nº PROCESSO</th>
							<th>DATA ABERTURA</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@include('clientesProcessos/listaProcesso')
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
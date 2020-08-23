@include('/index')
<form name="processos" method ="GET">
<div class="container">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 form-control">
						<center><strong>CONSULTA PROCESSOS</strong></center>			
					</div>
				</div>
				<br>

				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary active">PI
						<input type="radio" name="options" id="option1" autocomplete="off" checked disabled="">
					</label>
					<label class="btn btn-primary">PROCESSO Nº
						<input type="radio" name="options" id="option2" autocomplete="off"  disabled="">
					</label>
					<label class="btn btn-primary">CLIENTE
						<input type="radio" name="options" id="option3" autocomplete="off"  disabled="">
					</label>
					<label class="btn btn-primary">PARTE ADVERSA
						<input type="radio" name="options" id="option3" autocomplete="off"  disabled="">
					</label>
					<label class="btn btn-primary">OBJETO
						<input type="radio" name="options" id="option3" autocomplete="off"  disabled="">
					</label>
				</div>
				<div class="col-lg-12">&nbsp</div>

				<div class="col-lg-12">
					<div class="input-group">
						<input type="text" id="buscaProcessoTexto" class="form-control" placeholder="Busca.." name="busca">
						<!-- <span class="input-group-btn"> -->
							<!-- <button class="btn btn-secondary" type="button"><span class="fas fa-search" title="Busca"></button></span> -->
						<!-- </span> -->
					</div>
				</div>
				
				<div class="col-lg-12">&nbsp</div>

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
							@include('clientesProcessos/listaProcesso')
						</tr>
				  	</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>
 
</form>
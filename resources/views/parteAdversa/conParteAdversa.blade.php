
@include('index')

<div class="container" >
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 form-control">
						<center><b>CONSULTA PARTE ADVERSA</b></center>			
					</div>
				</div>
				<br>
				<input type="text" id="buscaParteAdversaTexto" class="form-control" placeholder="Busca" >

				<table class="table table-responsive">
					<thead>
						<tr>
							<th>NOME</th>
							<th>CPF / CNPJ</th>
							<th>TELEFONE</th>
							<th>WHATSAPP</th>
						</tr>
					</thead>
				  	<tbody id="listaParteAdversa">
						<tr> 
							@include('parteAdversa/listaParteAdversa')
						</tr>
				  	</tbody>
				</table>
			</div>
		</div>
	</div>	
<p align="center">{{ $dados->appends(['query'=>$result])->links() }}</p>	
</div>
 

<script type="text/javascript" src="{{ asset('js/parteAdversa/conParteAdversa.js') }}"></script>

<script>
// $(document).ready(function() {
// 	$('#buscaParteAdversaTexto').keyup(function(){
// 		query = document.getElementById('buscaParteAdversaTexto').value;
// 		$.ajax({
// 			url:"{{route('listaParteAdversa')}}",
// 			method:'GET',
// 			data:{query:query},	
// 			datatype:'json',
// 			success:function(data)
// 			{
// 				$('#listaParteAdversa').html(data);
// 			}
// 		})
// 	});
// });
$(document).ready(function() {
	$('#buscaParteAdversaTexto').keyup(function(){

 		query = document.getElementById('buscaParteAdversaTexto').value;
		location.href='conParteAdversa?query='+query+'&page=1';
	});
});
</script> 
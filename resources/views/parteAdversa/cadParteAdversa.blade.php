@include('/index')
<style>
	#Titulo{
		padding: 5px;
	}
	.card-block{
		
		padding: 5px;
	}
</style>
<script type="text/javascript" src="{{ asset('js/parteAdversa/cadParteAdversa.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<form name="cadParteAdversa" method="post" action="{{ route('salvaParteAdversa') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container">
<div class="card card text-black mb-3">
	<div class="card-block">
		<div class="container">
			<div class="row">
				<div class="col-sm|md|lg|xl-1-12|auto form-control">
					<center><strong><h3>CADASTRO PARTE ADVERSA</h3></strong></center>			

				</div>
			</div>
				PESSOA
				<div class="row">
				<div class="col-lg-3">
					<div class="radio form-control">
						<label>
							<input type="radio" name="radioPessoa" id="exampleRadios1" value="0" checked="" onchange="pessoa(tipoPessoa = this.value)">
							FÍSICA
						</label>
					</div>
				</div>
				<div class="col-lg-3">

					<div class="radio form-control">
						<label>
							<input type="radio" name="radioPessoa" id="exampleRadios1" value="1" onchange="pessoa(tipoPessoa = this.value)">
							JURÍDICA
						</label>
					</div>
				</div>
						
			
	 			</div>
 
	 			<div class="row">
				<div class="col-lg-12">
					<label id="lblNome">NOME</label>
					<div class="input-group">
						<input type="text" id="nome" name="nome" placeholder="Nome da parte" class="form-control">
					</div>
				</div>
				<div class="col-lg-6">
					<label id="lblcpf_cnpj">CNPJ </label>
					<input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control">
				</div>
				<div class="col-lg-6">
					<label id="lblRG">INSC. ESTADUAL</label>
					<input type="text" id="rg" name="rg" class="form-control">
				</div>
				<div class="col-lg-6">
					<label id="lblRamoAtuacao">RAMO ATUAÇÃO</label>
					<input type="text" id="ramo_atuacao" name="ramo_atuacao" class="form-control">
				</div>
				<div class="col-lg-6">
					<label id="lblResponsavel">RESPONSÁVEL</label>
					<input type="text" id="responsavel" name="responsavel" class="form-control">
				</div>

				<div class="col-lg-6">
					<label id="lblEmail">E-MAIL</label>
					<input type="text" id="e-mail" name="e-mail" class="form-control">
				</div>

				<div class="col-lg-6">
					<label id="lblProfissao">PROFISSÃO</label>
					<input type="text" id="profissao" name="profissao" class="form-control">
				</div>
							
				<div class="col-lg-6">
					<label id="lblEstadoCivil">ESTADO CIVIL</label>
					<input type="hidden" id="ECIVIL">
					<select class="estadoCivil form-control" name="estado_civil" id="estado_civil" >
						<option>Selecione</option>
						<option value="Solteiro">Solteiro</option>
						<option value="Casado">Casado</option>
						<option value="Separado">Separado</option>
						<option value="Divorciado">Divorciado</option>
						<option value="União Estável">União Estável</option>
						<option value="Viúvo">Viúvo</option>
					</select>
				</div>


				<div class="col-lg-6">
					FONE
					<input type="text" id="fone" name="fone" class="form-control">
				</div>
				<div class="col-lg-6">
					WHATSAPP
					<input type="text" id="whatsapp" name="whatsapp" class="form-control">
				</div>

				<div class="col-lg-6">
					ESTADO
					<select class="form-control" name="id_estado" id="estado">
						<option value="">Selecione um Estado</option>
						<option value="12">AC</option>
						<option value="27">AL</option>
						<option value="16">AP</option>
						<option value="13">AM</option>
						<option value="29">BA</option>
						<option value="23">CE</option>
						<option value="53">DF</option>
						<option value="32">ES</option>
						<option value="52">GO</option>
						<option value="21">MA</option>
						<option value="51">MT</option>
						<option value="50">MS</option>
						<option value="31">MG</option>
						<option value="41">PA</option>
						<option value="25">PB</option>
						<option value="41">PR</option>
						<option value="26">PE</option>
						<option value="22">PI</option>
						<option value="33">RJ</option>
						<option value="24">RN</option>
						<option value="43">RS</option>
						<option value="11">RO</option>
						<option value="14">RR</option>
						<option value="42">SC</option>
						<option value="35">SP</option>
						<option value="28">SE</option>
						<option value="17">TO</option>
					</select>
				</div>
				<div class="col-lg-6">
					CIDADE
					<select class="form-control" name="id_cidade" id="cidade"></select>
				</div>
				<div class="col-lg-6">
					LOGRADOURO
					<input type="text" id="endereco" name="endereco" class="form-control">
				</div>
				<div class="col-lg-2">
					NÚMERO
					<input type="text" id="numero" name="numero" class="form-control">
				</div>

				<div class="col-lg-4">
					BAIRRO
					<input type="text" id="bairro" name="bairro" class="form-control">
				</div>
 
			</div>
		</div>			


		<div class="row">
			<div class="col-lg-12">&nbsp</div>
			<div class="col-lg-12">
	 			<button type="submit" class="btn btn-success form-control" title="Salvar Registro" id="btnSalvar" 
	 			href="">SALVAR</button>
	 		</div>
	 	</div>
	</div>


	<!-- Modal BUSCA CLIENTES-->

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">CONSULTA CLIENTES</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

	      </div>
	    </div>
	  </div>
	</div>
</div>

<!-- JQUERY  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
pessoa('0')

function pessoa(tipoPessoa){
	switch(tipoPessoa){
		// PESSOA FISICA
		case '0': 
		$('#lblcpf_cnpj').text('CPF');
		$('#lblRG').text('RG');
		$('#lblRamoAtuacao').hide();
		$('#lblResponsavel').hide();
		$('#lblEmail').show();
		$('#lblProfissao').show();
		$('#lblEstadoCivil').show();

		$('#ramo_atuacao').hide();
		$('#responsavel').hide();
		$('#e-mail').show();
		$('#cpf_cnpj').val('')
		$('#cpf_cnpj').mask('999.999.999-99')
		$('#estado_civil').show();
		$('#profissao').show();

		$('#ramo_atuacao').val('');
		$('#responsavel').val('');
		$('#e-mail').val('');
		break;
		// PESSOA JURIDICA
		case '1': 
		$('#lblcpf_cnpj').text('CNPJ');
		$('#lblRG').text('INSC. ESTADUAL');
		$('#lblRamoAtuacao').show();
		$('#lblResponsavel').show();
		$('#lblEmail').show();
		$('#lblProfissao').hide();
		$('#lblEstadoCivil').hide();

		$('#ramo_atuacao').show();
		$('#responsavel').show();
		$('#e-mail').show();
		$('#estado_civil').hide();
		$('#profissao').hide();

		$('#cpf_cnpj').val('')
		$('#cpf_cnpj').mask('99.999.999/9999-99')
		 
		
		break;
	}
}

$('#estado').change(function(event) {
	idEstado = document.getElementById('estado').value;

	$('#cidade').empty();
	$.ajax({
		url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+idEstado+'/municipios',
		method: 'GET',
		dataType: 'json', 
		success:function(result){
			 $.each(result, function (key, val) {

			 	$('#cidade').append($('<option>', {value:result[key].id, text:result[key].nome}));            
			 });
		}
		 
	});
});
 
	
</script>



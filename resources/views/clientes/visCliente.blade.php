@include('index')
<div class="container">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">
						<center><strong><h3>VISUALIZA DADOS CLIENTE</h3></strong></center>			
					</div>
				</div>

				PESSOA
				<div class="row">
				<div class="col-lg-3">
					<div class="radio form-control">
						<label>
							<input type="radio" name="radioPessoa" id="radioCPF" value="0" onchange="pessoa(tipoPessoa = this.value)" disabled >
							FÍSICA
						</label>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="radio form-control">
						<label>
							<input type="radio" name="radioPessoa" id="radioCNPJ" value="1" onchange="pessoa(tipoPessoa = this.value)" disabled >
							JURÍDICA
						</label>
					</div>
				</div>
				<div class="col-lg-6">
					<a href="{{ route('conCliente') }}"><button type="button" class="btn btn-info form-control">VOLTAR</button></a>
				</div>

			</div>
 		@if(strlen($registro->CPF_CNPJ) <= 14)
 			<div id="PF" >
				<div class="row"> 				
				<div class="col-lg-12">
					NOME
					<div class="input-group">
						<input type="text" id="nome" name="nome" placeholder="Nome do Cliente" class="form-control" value="{{ $registro->NOME }}" readonly="true">
					</div>
				</div>
				<div class="col-lg-6">
					<span id="lblCPF_CNPJ"> CPF </span>
					<input type="text" id="cpf" name="cpf_cnpj" class="form-control" value="{{ $registro->CPF_CNPJ }}" readonly="true">
				</div>
				<div class="col-lg-6">
					<span id="lblRG_INSC"> RG </span>
					<input type="text" id="rg" name="rg" class="form-control" value="{{ $registro->RG }}" readonly="true">
				</div>
				<div class="col-lg-6">
					PROFISSÃO
					<input type="text" id="profissao" name="profissao" class="form-control" value="{{ $registro->PROFISSAO }}" readonly="true">
				</div>
							
				<div class="col-lg-6">
					ESTADO CIVIL
					<input type="hidden" id="ECIVIL" value="{{ $registro->ESTADO_CIVIL }}">
					<select class="estadoCivil form-control" name="estado_civil" id="estado_civil" disabled>
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
					E-MAIL
					<input type="text" id="email" name="email" class="form-control" 
					value="{{ $registro->EMAIL }}">
				</div>

				<div class="col-lg-6">
					FONE
					<input type="text" id="fone" name="fone" class="form-control" value="{{ $registro->FONE }}" readonly="true">
				</div>
				<div class="col-lg-6">
					WHATSAPP
					<input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ $registro->WHATSAPP }}" readonly="true">
				</div>
				<div class="col-lg-6">
					ESTADO
					<input type="hidden" id="IDESTADO" value="{{ $registro->ID_ESTADO }}">
					<select class="form-control" name="id_estado" id="estado" disabled>
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
					<input type="hidden" id="CIDADE" value="{{ $registro->ID_CIDADE }}">
					<select class="form-control" name="id_cidade" id="cidade" disabled></select>
				</div>
				<div class="col-lg-6">
					LOGRADOURO
					<input type="text" id="endereco" name="endereco" class="form-control" value="{{ $registro->ENDERECO }}" readonly="true">
				</div>
				<div class="col-lg-2">
					NÚMERO
					<input type="text" id="numero" name="numero" class="form-control" value="{{ $registro->NUMERO }}" readonly="true">
				</div>

				<div class="col-lg-4">
					BAIRRO
					<input type="text" id="bairro" name="bairro" class="form-control" value="{{ $registro->BAIRRO }}" readonly="true">
				</div>
 			</div> </div>
 		@endif
 		@if(strlen($registro->CPF_CNPJ) > 14)
			<!-- PESSOA JURIDICA -->
 			<div id="PJ">
				<div class="row"> 				
				<div class="col-lg-12">
					NOME (RAZÃO SOCIAL)
					<div class="input-group">
						<input type="text" id="nome" name="nome" placeholder="Nome do Cliente" class="form-control" value="{{ $registro->NOME }}" readonly="true">
					</div>
				</div>
				<div class="col-lg-6">
					<span id="lblCPF_CNPJ"> CNPJ </span>
					<input type="text" id="cpf" name="cpf_cnpj" class="form-control" value="{{ $registro->CPF_CNPJ }}" readonly="true">
				</div>
				<div class="col-lg-6">
					<span id="lblRG_INSC"> INSC. ESTADUAL </span>
					<input type="text" id="rg" name="rg" class="form-control" value="{{ $registro->RG }}" readonly="true">
				</div>
				<div class="col-lg-6">
					RAMO ATUAÇÃO
					<input type="text" id="ramo_atuacao" name="ramo_atuacao" value="{{ $registro->RAMO_ATUACAO }}" class="form-control" readonly="true">
				</div>
				<div class="col-lg-6">
					RESPONSÁVEL
					<input type="text" id="responsavel" name="responsavel" class="form-control" value="{{ $registro->RESPONSAVEL }}" readonly="true">
				</div>
				<div class="col-lg-6">
					E-MAIL
					<input type="text" id="email" name="email" class="form-control" 
					value="{{ $registro->EMAIL }}" readonly="true">
				</div>
				<div class="col-lg-6">
					FONE
					<input type="text" id="fone" name="fone" class="form-control" value="{{ $registro->FONE }}" readonly="true">
				</div>
				<div class="col-lg-6">
					WHATSAPP
					<input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ $registro->WHATSAPP }}" readonly="true">
				</div>
				<div class="col-lg-6">
					ESTADO
					<input type="hidden" id="IDESTADO" value="{{ $registro->ID_ESTADO }}">
					<select class="form-control" name="id_estado" id="estado" disabled>
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
					<input type="hidden" id="CIDADE" value="{{ $registro->ID_CIDADE }}">
					<select class="form-control" name="id_cidade" id="cidade" disabled></select>
				</div>
				<div class="col-lg-6">
					LOGRADOURO
					<input type="text" id="endereco" name="endereco" class="form-control" value="{{ $registro->ENDERECO }}" readonly="true">
				</div>
				<div class="col-lg-2">
					NÚMERO
					<input type="text" id="numero" name="numero" class="form-control" value="{{ $registro->NUMERO }}" readonly="true">
				</div>

				<div class="col-lg-4">
					BAIRRO
					<input type="text" id="bairro" name="bairro" class="form-control" value="{{ $registro->BAIRRO }}" readonly="true">
				</div>
 			</div>
			</div>

		</div>							
	</div>
	@endif

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- CHAMANDO FUNÇÕES JS -->

<script type="text/javascript" src="{{ asset('js/clientes/altclientes.js?getMilliseconds()') }}"></script>

<script>
 
iCPF = document.getElementById('cpf').value;
if(iCPF.length <= 14){
	document.getElementById('radioCPF').checked = true;
}
if(iCPF.length > 14){
	document.getElementById('radioCNPJ').checked = true;
}

function pessoa(tipoPessoa){
	switch(tipoPessoa){
		case '0': 
			$("#cpf").mask("999.999.999-99");
			document.getElementById('lblCPF_CNPJ').innerHTML = 'CPF';
			break;
		case '1': $("#cpf").mask("99.999.999/9999-99");
			document.getElementById('lblCPF_CNPJ').innerHTML = 'CNPJ';
			break;
	}
}


idEstado = document.getElementById('IDESTADO').value;
document.getElementById('estado').value 		= idEstado;

$.ajax({
		url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+idEstado+'/municipios',
		method: 'GET',
		dataType: 'json', 
		success:function(result){
			 $.each(result, function (key, val) {
			 	$('#cidade').append($('<option>', {value:result[key].id, text:result[key].nome}));            
				cidade = document.getElementById('CIDADE').value;
				document.getElementById('cidade').value 		= cidade;
			 });
		}
});



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


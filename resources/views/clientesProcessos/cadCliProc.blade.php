@include('index')


<form method="POST" action="{{ route('concluiProcesso',$idProcesso) }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_method" value="put">


<div class="container conteudo">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">					
						<i class="fas fa-print" id="imprimir" style="cursor:pointer" title="Imprimir"></i>
					</div>
					<div class="col-sm|md|lg|xl-1-12|auto form-control">					
						<b> PI Nº {{ $dadosProcesso->pigerado }}</b>
					</div>
					<input type="hidden" name="nprocesso" value="{{ $nProcesso }}" >
				</div>
				<br>			
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">
						<center><b>CADASTRO DE CLIENTES E PROCESSOS</b></center>
					</div>

					<div class="col-lg-6 ">
						TIPO 
						<input type="hidden"   value="{{ $dadosProcesso->tiporeferencia }}" id="tiporeferencia">

						<select class="c-select form-control" id="option" name="tiporeferencia" >
							<option value="0">Nenhum</option>
							<option value="1">Idoso</option>
							<option value="2">Menor</option>
							<option value="3">Liminar</option>
						</select>
					</div>

					<script>			
		 				iTiporeferencia = document.getElementById('tiporeferencia').value;
		 				document.getElementById('option').selectedIndex = iTiporeferencia;
					</script>

					<div class="col-lg-12 ">
						CLIENTE
						<div class="input-group">
							<input type="hidden" class="form-control" placeholder="Selecione o Cliente..." value="@isset($dados) {{ $dados->id }} @endisset" id="IDCLIENTE" name="idcliente">
							<input type="text" class="form-control" placeholder="Selecione o Cliente..." value="@isset($dados) {{ $dados->NOME }} @endisset" id="NomeCliente" name="nome" id="nome" readonly="true" >
							<span class="input-group-btn">

	<!-- 							<button class="btn btn-secondary fa fa-search" type="button" title="BUSCA CLIENTES" id="buscaClientes"
								data-toggle="modal" data-target="#modalBuscaClientes-1"></button>
	 -->						</span>
						</div>
					</div>
		
					<div class="col-lg-6">
						CPF
						<input type="text" name="cpf_cnpj" id="cpf_cnpj" value="@isset($dados) {{ $dados->CPF_CNPJ }} @endisset" class="form-control" readonly="true">
					</div>
					
					<div class="col-lg-6">
						RG
						<input type="text" name="rg" id="rg" value="@isset($dados) {{ $dados->RG }} @endisset" class="form-control" readonly="true">
					</div>
					<div class="col-lg-6">
						PROFISSÃO
						<input type="text" name="profissao" id="profissao" value="@isset($dados) {{ $dados->PROFISSAO }} @endisset" class="form-control" readonly="true">
					</div>
					<div class="col-lg-6">
						ESTADO CIVIL
						<input type="text" name="estado_civil" id="estado_civil" value="@isset($dados) {{ $dados->ESTADO_CIVIL }} @endisset" class="form-control" disabled>
					</div>
					<div class="col-lg-6">
						FONE
						<input type="text" name="fone" id="fone" value="@isset($dados) {{ $dados->FONE }} @endisset" class="form-control" readonly="true">
					</div>
					<div class="col-lg-6">
						WHATSAPP
						<input type="text" name="whatsapp" id="whatsapp" value="@isset($dados) {{ $dados->WHATSAPP }} @endisset" class="form-control" readonly="true">
					</div>
					<div class="col-lg-12">
						PARTE ADVERSA
						<div class="input-group">
							<input type="hidden" class="form-control" placeholder="Selecione a Parte Adversa..." value="@isset($dadosPadv) {{ $dadosPadv->id }} @endisset" id="IDPARTEADV" name="idparteadversa" readonly="true">
					
							<input type="text" class="form-control" placeholder="Selecione a Parte Adversa..." value="@isset($dadosPadv) {{ $dadosPadv->NOME }} @endisset" id="ParteAdversa" readonly="true">
							<span class="input-group-btn">

	<!-- 							<button class="btn btn-secondary fa fa-search" type="button" title="BUSCA PARTE ADVERSA" id="buscaParteAdversa"
								data-toggle="modal" data-target="#modalBuscaParteAdversa-1"></button>
	 -->						</span>
						</div>
					</div>

					<div class="col-lg-12">
						RAMO DO DIREITO
						<div class="input-group">
							<input type="hidden" class="form-control" placeholder="Selecione Ramo do Direito..." value="@isset($dadosRamoDireito) {{ $dadosRamoDireito->id }} @endisset" name="idramodireito" readonly="true">

							<input type="text" class="form-control" placeholder="Selecione Ramo do Direito..." value="@isset($dadosRamoDireito) {{ $dadosRamoDireito->NOME }} @endisset" id="IDRAMODIREITO" readonly="true">

							<span class="input-group-btn">

	<!-- 							<button class="btn btn-secondary fa fa-search" type="button" title="BUSCA RAMO DO DIREITO" id="buscaRamoDireito"
								data-toggle="modal" data-target="#modalBuscaRamoDireito-1"></button>
	 -->						</span>
						</div>
					</div>

					<div class="col-lg-12">
						OBJETO
							<input type="text" name="objeto" id="objeto" class="form-control" value="{{$dadosProcesso->objeto}}">
					</div>
					<div class="col-lg-6">
						DESCRIÇÃO DOS FATOS
						<textarea class="form-control" name="descricaofatos" id="descricaoFatos" rows="3">{{$dadosProcesso->descricaofatos}}</textarea>
					</div>
					<div class="col-lg-6">
						Nº PROCESSO
						<input type="text" name="nprocesso" class="form-control" value="{{$dadosProcesso->nprocesso}}" id="nprocesso">
					</div>
					<div class="col-lg-12"> &nbsp </div> 
				</div>	
			</div>
		</div>
	</div>
</div>
<button type="submit" class="btn btn-primary form-control">SALVAR</button>				
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
	@media print {
		.conteudo {
			 background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
		}
	}
</style>
<script>
	$('#imprimir').click(function(event) {
		/* Act on the event */
		window.print()
	});
</script>
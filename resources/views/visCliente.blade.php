
@include('index')
 
<input type="hidden" name="_method" value="put">

<div class="container">
	<div class="card">
		<div class="card-block">
			<div class="container">
				<div class="row">
					<div class="col-sm|md|lg|xl-1-12|auto form-control">
						<center><b>VISUALIZA DADOS PARTE ADVERSA</b></center>			
					</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					NOME
					<div class="input-group">
						<input type="text" id="nome" name="nome" placeholder="Nome Parte Adversa" class="form-control" value="{{ $registro->NOME }}" disabled>
						<span class="input-group-btn">
							<!-- <button class="btn btn-secondary fa fa-search" type="button" title="BUSCA PARTE ADVERSA" id="buscaParteAdversa"   -->
							data-toggle="modal" data-target="#exampleModal" disabled></button>
						</span>				
					</div>
				</div>
				<div class="col-lg-6">
					CPF
					<input type="text" id="cpf" name="cpf_cnpj" class="form-control" value="{{ $registro->CPF_CNPJ }}" disabled>
				</div>
				<div class="col-lg-6">
					RG
					<input type="text" id="rg" name="rg" class="form-control" value="{{ $registro->RG }}" disabled>
				</div>
				<div class="col-lg-6">
					PROFISSÃO
					<input type="text" id="profissao" name="profissao" class="form-control" value="{{ $registro->PROFISSAO }}" disabled>
				</div>
							
				<div class="col-lg-6">
					ESTADO CIVIL
					<input type="hidden" id="ECIVIL" value="{{ $registro->ESTADO_CIVIL }}">
					<select class="estadoCivil form-control" name="estado_civil" id="estado_civil" disabled >
						<option>Selecione</option>
						<option value="0">Solteiro</option>
						<option value="1">Casado</option>
						<option value="2">Separado</option>
						<option value="3">Divorciado</option>
						<option value="4">União Estável</option>
						<option value="5">Viúvo</option>
					</select>
				</div>
				<div class="col-lg-6">
					FONE
					<input type="text" id="fone" name="fone" class="form-control" value="{{ $registro->FONE }}" disabled>
				</div>
				<div class="col-lg-6">
					WHATSAPP
					<input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ $registro->WHATSAPP }}" disabled>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">&nbsp</div>
			<div class="col-lg-6">
	 			 
	 		</div>
	 	</div>
	</div>
</div>
 

<!-- JQUERY  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<!-- CHAMANDO FUNÇÕES JS -->

<!-- <script type="text/javascript" src="{{ asset('js/parteAdversa/altParteAdversa.js') }}"></script> -->



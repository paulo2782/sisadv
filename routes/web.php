<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// INICIO
Route::get('/', ['as' => 'home', 'uses' => 'Controller@home']);

//**************************************************************
// CLIENTES 
//**************************************************************
// CADASTRO DE CLIENTES 
Route::get('/clientes/cadCliente', 'ClientesController@index')->name('cadCliente');
// CONSULTAR CLIENTES
Route::get('/clientes/conCliente', 'ClientesController@consultaCliente')->name('conCliente');
// SALVAR CLIENTES
Route::post('/clientes/salvaCliente', 'ClientesController@salvaCliente')->name('salvaCliente');
// EXCLUIR CLIENTES
Route::get('/clientes/excluirCliente/{id}', 'ClientesController@excluirCliente')->name('excluirCliente');
// EDITAR CLIENTES
Route::get('/clientes/edtCliente/{id}', 'ClientesController@editarCliente')->name('edtCliente');
// SALVA ALTERARAÇÃO CLIENTES
Route::put('/clientes/alterarCliente/{id}', 'ClientesController@alterarCliente')->name('alterarCliente');
// VISUALIZA PARTE ADVERSA
Route::get('/clientes/visCliente/{id}', 'ClientesController@visCliente')->name('visCliente');
//**************************************************************

//**************************************************************
// PARTE ADVERSA
//**************************************************************
// CADASTRO PARTE ADVERSA
Route::get('/parteAdversa/cadParteAdversa', 'ParteAdversaController@index')->name('cadParteAdversa');
// CONSULTAR PARTE ADVERSA
Route::get('/parteAdversa/conParteAdversa', 'ParteAdversaController@conParteAdversa')->name('conParteAdversa');
Route::get('/parteAdversa/listaParteAdversa', 'ParteAdversaController@listaParteAdversa')->name('listaParteAdversa');
// SALVAR PARTE ADVERSA
Route::post('/parteAdversa/salvaParteAdversa', 'ParteAdversaController@salvaParteAdversa')->name('salvaParteAdversa');
// EXCLUIR PARTE ADVERSA
Route::get('/parteAdversa/excluirParteAdversa/{id}', 'ParteAdversaController@excluirParteAdversa')->name('excluirParteAdversa');
// EDITAR PARTE ADVERSA
Route::get('/parteAdversa/edtParteAdversa/{id}', 'ParteAdversaController@editarParteAdversa')->name('editarParteAdversa');
// SALVA ALTERAÇÃO PARTE ADVERSA
Route::put('/parteAdversa/alterarParteAdversa/{id}', 'ParteAdversaController@alterarParteAdversa')->name('alterarParteAdversa');
// VISUALIZA PARTE ADVERSA
Route::get('/parteAdversa/visParteAdversa/{id}', 'ParteAdversaController@visParteAdversa')->name('visParteAdversa');
 
//**************************************************************
// RAMO DO DIREITO
//**************************************************************
// CADASTRO RAMO DO DIREITO
Route::get('/ramoDireito/cadRamoDireito', 'RamosDireitoController@index')->name('cadRamoDireito');

// SALVA RAMO DO DIREITO
Route::post('/ramoDireito/salvaRamoDireito', 'RamosDireitoController@salvaRamoDireito')->name('salvaRamoDireito');

// MONTA LISTA
Route::get('/ramoDireito/listaRamoDireito', 'RamosDireitoController@listaRamoDireito')->name('listaRamoDireito');

// EXCLUI RAMO DO DIREITO
Route::get('/ramoDireito/excluiRamoDireito/{id}', 'RamosDireitoController@excluiRamoDireito')->name('excluiRamoDireito');

// EDITAR RAMO DO DIREITO
Route::get('/ramoDireito/editarRamoDireito/{id}', 'RamosDireitoController@editarRamoDireito')->name('editarRamoDireito');

// SALVA ALTERARAÇÃO RAMO DO DIREITO
Route::put('/ramoDireito/alterarRamoDireito/{id}', 'RamosDireitoController@alterarRamoDireito')->name('alterarRamoDireito');

//**************************************************************
// CLIENTES E PROCESSOS
//**************************************************************
// ABRIR PROCESSO
Route::get('/clientesProcessos/abrirProcesso', 'ClientesProcessoController@abrirProcesso')->name('abrirProcesso');
// CADASTRO DE PROCESSOS
Route::get('/clientesProcessos/cadCliProc/{idProcesso?}/{pi?}/{mesano?}/{idCliente?}/{idParteAdv?}/{idRamoDireito?}', 'ClientesProcessoController@cadCliProc')->name('cadCliProc');
// SALVAR ABRIR PROCESSO
Route::post('/clientesProcessos/salvarAbrirProcesso', 'ClientesProcessoController@salvarAbrirProcesso')->name('salvarAbrirProcesso');
// BUSCA CLIENTES
Route::get('/clientesProcessos/buscaClientes', 'ClientesProcessoController@buscaClientes')->name('buscaClientes');
// SELECIONA CLIENTE
Route::get('/clientesProcessos/selecionaClientes/{id}', 'ClientesProcessoController@selecionaClientes')->name('selecionaClientes');
// BUSCA CLIENTES
Route::get('/clientesProcessos/buscaParteAdversa', 'ClientesProcessoController@buscaParteAdversa')->name('buscaParteAdversa');
// SELECIONA PARTE ADVERSA
Route::get('/clientesProcessos/selecionaParteAdversa/{id}/{idCliente?}', 'ClientesProcessoController@selecionaParteAdversa')->name('selecionaParteAdversa'); 
// BUSCA PROCESSOS
Route::get('/clientesProcessos/processosAbertos/{rota?}', 'ClientesProcessoController@processosAbertos')->name('processosAbertos');
// CONCLUI PROCESSO
Route::put('/clientesProcessos/concluiProcesso/{id?}', 'ClientesProcessoController@concluiProcesso')->name('concluiProcesso');

//**************************************************************
// BUSCA RAMO DIREITO
//**************************************************************
Route::get('/clientesProcessos/buscaRamoDireito',  'ClientesProcessoController@buscaRamoDireito')->name('buscaRamoDireito'); 
// SELECIONA RAMO DIREITO
Route::get('/clientesProcessos/selecionaRamoDireito/{idCliente?}/{idParteAdv?}/{idRamoDireito?}', 'ClientesProcessoController@selecionaRamoDireito')->name('selecionaRamoDireito'); 

//**************************************************************
// TIPOS DE HONORARIOS
//**************************************************************
// CADASTRO TIPO DE HONORARIO
Route::get('/honorarios/cadHonorario',  'HonorarioController@cadHonorario')->name('cadHonorario'); 
//
// SALVA TIPO DE HONORARIO
Route::post('/honorarios/salvaHonorario', 'HonorarioController@salvaHonorario')->name('salvaHonorario');
// EXCLUIR TIPO DE HONORARIO
Route::get('/honorarios/excluiHonorario/{id?}', 'HonorarioController@excluiHonorario')->name('excluiHonorario');
// LISTA TIPO DE HONORARIO
Route::get('/honorarios/listaHonorario', 'HonorarioController@listaHonorario')->name('listaHonorario');
// CALCULA HONORARIO
Route::get('/honorarios/resumoHonorario/{id_processo?}', 'HonorarioController@resumoHonorario')->name('resumoHonorario');


//**************************************************************
// RECEITAS
//**************************************************************
//
// BUSCA HONORARIO PROCESSO
Route::get('/receita/BuscaHonProcesso/{id?}', 'ReceitaController@BuscaHonProcesso')->name('BuscaHonProcesso');
// 
Route::post('/receita/salvaReceita', 'ReceitaController@salvaReceita')->name('salvaReceita');

//**************************************************************
// RELATÓRIOS
//**************************************************************
// RELATÓRIO DE CLIENTES
//
Route::get('/relatorios/clientes/relClientes', 'RelatorioClientesController@relClientes')->name('relClientes');


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/clientes/cadCliente', ['as' => 'cadCliente', 'uses' => 'ClientesController@index']);
// CONSULTAR CLIENTES
Route::get('/clientes/conCliente', ['as' => 'conCliente', 'uses' => 'ClientesController@consultaCliente']);
// SALVAR CLIENTES
Route::post('/clientes/salvaCliente', ['as' => 'salvaCliente', 'uses' => 'ClientesController@salvaCliente']);
// EXCLUIR CLIENTES
Route::get('/clientes/excluirCliente/{id}', ['as' => 'excluirCliente', 'uses' => 'ClientesController@excluirCliente']);
// EDITAR CLIENTES
Route::get('/clientes/edtCliente/{id}', ['as' => 'edtCliente', 'uses' => 'ClientesController@editarCliente']);
// SALVA ALTERARAÇÃO CLIENTES
Route::put('/clientes/alterarCliente/{id}', ['as' => 'alterarCliente', 'uses' => 'ClientesController@alterarCliente']);
// VISUALIZA PARTE ADVERSA
Route::get('/clientes/visCliente/{id}', ['as' => 'visCliente', 'uses' => 'ClientesController@visCliente']);
//**************************************************************

//**************************************************************
// PARTE ADVERSA
//**************************************************************
// CADASTRO PARTE ADVERSA
Route::get('/parteAdversa/cadParteAdversa', ['as' => 'cadParteAdversa', 'uses' => 'ParteAdversaController@index']);
// CONSULTAR PARTE ADVERSA
Route::get('/parteAdversa/conParteAdversa', ['as' => 'conParteAdversa', 'uses' => 'ParteAdversaController@conParteAdversa']);
Route::get('/parteAdversa/listaParteAdversa', ['as' => 'listaParteAdversa', 'uses' => 'ParteAdversaController@listaParteAdversa']);
// SALVAR PARTE ADVERSA
Route::post('/parteAdversa/salvaParteAdversa', ['as' => 'salvaParteAdversa', 'uses' => 'ParteAdversaController@salvaParteAdversa']);
// EXCLUIR PARTE ADVERSA
Route::get('/parteAdversa/excluirParteAdversa/{id}', ['as' => 'excluirParteAdversa', 'uses' => 'ParteAdversaController@excluirParteAdversa']);
// EDITAR PARTE ADVERSA
Route::get('/parteAdversa/edtParteAdversa/{id}', ['as' => 'edtParteAdversa', 'uses' => 'ParteAdversaController@editarParteAdversa']);
// SALVA ALTERAÇÃO PARTE ADVERSA
Route::put('/parteAdversa/alterarParteAdversa/{id}', ['as' => 'alterarParteAdversa', 'uses' => 'ParteAdversaController@alterarParteAdversa']);
// VISUALIZA PARTE ADVERSA
Route::get('/parteAdversa/visParteAdversa/{id}', ['as' => 'visParteAdversa', 'uses' => 'ParteAdversaController@visParteAdversa']);
//**************************************************************

//**************************************************************
// RAMO DO DIREITO
//**************************************************************
// CADASTRO RAMO DO DIREITO
Route::get('/ramoDireito/cadRamoDireito', ['as' => 'cadRamoDireito', 'uses' => 'RamosDireitoController@index']);

// SALVA RAMO DO DIREITO
Route::post('/ramoDireito/salvaRamoDireito', ['as' => 'salvaRamoDireito', 'uses' => 'RamosDireitoController@salvaRamoDireito']);

// MONTA LISTA
Route::get('/ramoDireito/listaRamoDireito', ['as' => 'listaRamoDireito', 'uses' => 'RamosDireitoController@listaRamoDireito']);

// EXCLUI RAMO DO DIREITO
Route::get('/ramoDireito/excluiRamoDireito/{id}',  ['as' => 'excluiRamoDireito', 'uses' => 'RamosDireitoController@excluiRamoDireito']);

// EDITAR RAMO DO DIREITO
Route::get('/ramoDireito/editarRamoDireito/{id}', ['as' => 'editarRamoDireito', 'uses' => 'RamosDireitoController@editarRamoDireito']);

// SALVA ALTERARAÇÃO RAMO DO DIREITO
Route::put('/ramoDireito/alterarRamoDireito/{id}', ['as' => 'alterarRamoDireito', 'uses' => 'RamosDireitoController@alterarRamoDireito']);
//**************************************************************


//**************************************************************
// CLIENTES E PROCESSOS
//**************************************************************
// ABRIR PROCESSO
Route::get('/clientesProcessos/abrirProcesso',['as' => 'abrirProcesso', 'uses' => 'ClientesProcessoController@abrirProcesso']);
// CADASTRO DE PROCESSOS
Route::get('/clientesProcessos/cadCliProc/{idProcesso?}/{pi?}/{mesano?}/{idCliente?}/{idParteAdv?}/{idRamoDireito?}', ['as' => 'cadCliProc', 'uses' =>   'ClientesProcessoController@cadCliProc']);
// SALVAR ABRIR PROCESSO
Route::post('/clientesProcessos/salvarAbrirProcesso', ['as' => 'salvarAbrirProcesso', 'uses' => 'ClientesProcessoController@salvarAbrirProcesso']);
// BUSCA CLIENTES
Route::get('/clientesProcessos/buscaClientes', ['as' => 'buscaClientes', 'uses' => 'ClientesProcessoController@buscaClientes']);
// SELECIONA CLIENTE
Route::get('/clientesProcessos/selecionaClientes/{id}', ['as' => 'selecionaClientes', 'uses' => 'ClientesProcessoController@selecionaClientes']);
// BUSCA CLIENTES
Route::get('/clientesProcessos/buscaParteAdversa', ['as' => 'buscaParteAdversa', 'uses' => 'ClientesProcessoController@buscaParteAdversa']);
// SELECIONA PARTE ADVERSA
Route::get('/clientesProcessos/selecionaParteAdversa/{id}/{idCliente?}',  ['as' => 'selecionaParteAdversa', 'uses' => 'ClientesProcessoController@selecionaParteAdversa']); 
// BUSCA PROCESSOS
Route::get('/clientesProcessos/processosAbertos/{rota?}', ['as' => 'processosAbertos', 'uses' => 'ClientesProcessoController@processosAbertos']);
// CONCLUI PROCESSO
Route::put('/clientesProcessos/concluiProcesso/{id?}', ['as' => 'concluiProcesso', 'uses' => 'ClientesProcessoController@concluiProcesso']);
//**************************************************************



//**************************************************************
// BUSCA RAMO DIREITO
//**************************************************************
Route::get('/clientesProcessos/buscaRamoDireito',  ['as' => 'buscaRamoDireito', 'uses' => 'ClientesProcessoController@buscaRamoDireito']); 
// SELECIONA RAMO DIREITO
Route::get('/clientesProcessos/selecionaRamoDireito/{idCliente?}/{idParteAdv?}/{idRamoDireito?}',  ['as' => 'selecionaRamoDireito', 'uses' => 'ClientesProcessoController@selecionaRamoDireito']); 
//**************************************************************

//**************************************************************
// TIPOS DE HONORARIOS
//**************************************************************
// CADASTRO TIPO DE HONORARIO
Route::get('/honorarios/cadHonorario',  ['as' => 'cadHonorario', 'uses' => 'HonorarioController@cadHonorario']); 
//
// SALVA TIPO DE HONORARIO
Route::post('/honorarios/salvaHonorario', ['as' => 'salvaHonorario', 'uses' => 'HonorarioController@salvaHonorario']);
// EXCLUIR TIPO DE HONORARIO
Route::get('/honorarios/excluiHonorario/{id?}', ['as' => 'excluiHonorario', 'uses' => 'HonorarioController@excluiHonorario']);
// LISTA TIPO DE HONORARIO
Route::get('/honorarios/listaHonorario', ['as' => 'listaHonorario', 'uses' => 'HonorarioController@listaHonorario']);
// CALCULA HONORARIO
Route::get('/honorarios/resumoHonorario/{id_processo?}', ['as' => 'resumoHonorario', 'uses' => 'HonorarioController@resumoHonorario']);

//**************************************************************

//**************************************************************
// RECEITAS
//**************************************************************
//
// BUSCA HONORARIO PROCESSO
Route::get('/receita/BuscaHonProcesso/{id?}', ['as' => 'BuscaHonProcesso', 'uses' => 'ReceitaController@BuscaHonProcesso']);
// 
Route::post('/receita/salvaReceita', ['as' => 'salvaReceita', 'uses' => 'ReceitaController@salvaReceita']);
//**************************************************************

//**************************************************************
// RELATÓRIOS
//**************************************************************
// RELATÓRIO DE CLIENTES
//
Route::get('/relatorios/clientes/relClientes', ['as' => 'relClientes', 'uses' => 'RelatorioClientesController@relClientes']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Http\Controllers\ApresentacaoController;
use App\Http\Controllers\ApresentadorController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\Evento_ApresentacaoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\PedidoController;
use App\Models\Pedido;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});


//carrega uma listagem do banco
Route::get('/local',
    [LocalController::class, 'index'])->name('local.index'); 
    
//chama o formulário da local
Route::get('/local/create',
    [LocalController::class, 'create'])->name('local.create');

 //realiza a ação de salvar do formulário
 Route::post('/local',
    [LocalController::class, 'store'])->name('local.store');

//chama o formulário para edição
Route::get('/local/edit/{id}',
    [LocalController::class, 'edit'])->name('local.edit');

 //realiza a ação de atualizar os dados do formulário
 Route::put('/local/update/{id}',
    [LocalController::class, 'update'])->name('local.update');

//chama o método para excluir o registro
Route::get('/local/destroy/{id}',
    [LocalController::class, 'destroy'])->name('local.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/local/search',
    [LocalController::class, 'search'])->name('local.search');






//carrega uma listagem do banco
Route::get('/apresentacao',
    [ApresentacaoController::class, 'index'])->name('apresentacao.index'); 
    
//chama o formulário da apresentacao
Route::get('/apresentacao/create',
    [ApresentacaoController::class, 'create'])->name('apresentacao.create');

 //realiza a ação de salvar do formulário
 Route::post('/apresentacao',
    [ApresentacaoController::class, 'store'])->name('apresentacao.store');

//chama o formulário para edição
Route::get('/apresentacao/edit/{id}',
    [ApresentacaoController::class, 'edit'])->name('apresentacao.edit');

 //realiza a ação de atualizar os dados do formulário
 Route::put('/apresentacao/update/{id}',
    [ApresentacaoController::class, 'update'])->name('apresentacao.update');

//chama o método para excluir o registro
Route::get('/apresentacao/destroy/{id}',
    [ApresentacaoController::class, 'destroy'])->name('apresentacao.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/apresentacao/search',
    [ApresentacaoController::class, 'search'])->name('apresentacao.search');






//carrega uma listagem do banco
Route::get('/apresentador',
[ApresentadorController::class, 'index'])->name('apresentador.index'); 

//chama o formulário da apresentador
Route::get('/apresentador/create',
[ApresentadorController::class, 'create'])->name('apresentador.create');

//realiza a ação de salvar do formulário
Route::post('/apresentador',
[ApresentadorController::class, 'store'])->name('apresentador.store');

//chama o formulário para edição
Route::get('/apresentador/edit/{id}',
[ApresentadorController::class, 'edit'])->name('apresentador.edit');

//realiza a ação de atualizar os dados do formulário
Route::put('/apresentador/update/{id}',
[ApresentadorController::class, 'update'])->name('apresentador.update');

//chama o método para excluir o registro
Route::get('/apresentador/destroy/{id}',
[ApresentadorController::class, 'destroy'])->name('apresentador.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/apresentador/search',
[ApresentadorController::class, 'search'])->name('apresentador.search');








//carrega uma listagem do banco
Route::get('/avaliacao',
    [AvaliacaoController::class, 'index'])->name('avaliacao.index'); 
    
//chama o formulário da avaliacao
Route::get('/avaliacao/create',
    [AvaliacaoController::class, 'create'])->name('avaliacao.create');

 //realiza a ação de salvar do formulário
 Route::post('/avaliacao',
    [AvaliacaoController::class, 'store'])->name('avaliacao.store');

//chama o formulário para edição
Route::get('/avaliacao/edit/{id}',
    [AvaliacaoController::class, 'edit'])->name('avaliacao.edit');

 //realiza a ação de atualizar os dados do formulário
 Route::put('/avaliacao/update/{id}',
    [AvaliacaoController::class, 'update'])->name('avaliacao.update');

//chama o método para excluir o registro
Route::get('/avaliacao/destroy/{id}',
    [AvaliacaoController::class, 'destroy'])->name('avaliacao.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/avaliacao/search',
    [AvaliacaoController::class, 'search'])->name('avaliacao.search');

//grafico
Route::get('/avaliacao/chart/',
    [AvaliacaoController::class, 'chart'])->name('avaliacao.chart');








//carrega uma listagem do banco
Route::get('/evento_apresentacao',
    [Evento_ApresentacaoController::class, 'index'])->name('evento_apresentacao.index'); 
    
//chama o formulário da evento_apresentacao
Route::get('/evento_apresentacao/create',
    [Evento_ApresentacaoController::class, 'create'])->name('evento_apresentacao.create');

 //realiza a ação de salvar do formulário
 Route::post('/evento_apresentacao',
    [Evento_ApresentacaoController::class, 'store'])->name('evento_apresentacao.store');

//chama o formulário para edição
Route::get('/evento_apresentacao/edit/{id}',
    [Evento_ApresentacaoController::class, 'edit'])->name('evento_apresentacao.edit');

 //realiza a ação de atualizar os dados do formulário
 Route::put('/evento_apresentacao/update/{id}',
    [Evento_ApresentacaoController::class, 'update'])->name('evento_apresentacao.update');

//chama o método para excluir o registro
Route::get('/evento_apresentacao/destroy/{id}',
    [Evento_ApresentacaoController::class, 'destroy'])->name('evento_apresentacao.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/evento_apresentacao/search',
    [Evento_ApresentacaoController::class, 'search'])->name('evento_apresentacao.search');








//carrega uma listagem do banco
Route::get('/evento',
    [EventoController::class, 'index'])->name('evento.index'); 
    
//chama o formulário da evento
Route::get('/evento/create',
    [EventoController::class, 'create'])->name('evento.create');

 //realiza a ação de salvar do formulário
 Route::post('/evento',
    [EventoController::class, 'store'])->name('evento.store');

//chama o formulário para edição
Route::get('/evento/edit/{id}',
    [EventoController::class, 'edit'])->name('evento.edit');

 //realiza a ação de atualizar os dados do formulário
 Route::put('/evento/update/{id}',
    [EventoController::class, 'update'])->name('evento.update');

//chama o método para excluir o registro
Route::get('/evento/destroy/{id}',
    [EventoController::class, 'destroy'])->name('evento.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/evento/search',
    [EventoController::class, 'search'])->name('evento.search');

//relatorio
Route::get('/evento/report/',
[EventoController::class, 'report'])->name('evento.report');






//carrega uma listagem do banco
Route::get('/pedido',
    [PedidoController::class, 'index'])->name('pedido.index'); 
    
//chama o formulário da pedido
Route::get('/pedido/create',
    [PedidoController::class, 'create'])->name('pedido.create');

 //realiza a ação de salvar do formulário
 Route::post('/pedido',
    [PedidoController::class, 'store'])->name('pedido.store');

//chama o formulário para edição
Route::get('/pedido/edit/{id}',
    [PedidoController::class, 'edit'])->name('pedido.edit');

 //realiza a ação de atualizar os dados do formulário
 Route::put('/pedido/update/{id}',
    [PedidoController::class, 'update'])->name('pedido.update');

//chama o método para excluir o registro
Route::get('/pedido/destroy/{id}',
    [PedidoController::class, 'destroy'])->name('pedido.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/pedido/search',
    [PedidoController::class, 'search'])->name('pedido.search');

//grafico
Route::get('/pedido/chart/',
    [PedidoController::class, 'chart'])->name('pedido.chart');

//relatorio
Route::get('/pedido/report/',
[PedidoController::class, 'report'])->name('pedido.report');
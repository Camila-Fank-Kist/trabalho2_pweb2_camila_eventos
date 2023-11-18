<?php

namespace App\Http\Controllers;

use App\Models\Apresentacao;
use App\Models\Apresentador;
use App\Models\Categoria_Apresentacao;

use Illuminate\Http\Request;

class ApresentacaoController extends Controller
{
    /**
     * Carrega a listagem de dados
     */ 
    public function index()
    { 
        $apresentacoes = Apresentacao::with('eventos', 'evento_apresentacao')->get();
        //dd($apresentacoes[0]->evento_apresentacao[0]->apresentacao->titulo);

        return view('apresentacao.list')->with(['apresentacoes' => $apresentacoes]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        $apresentadores = Apresentador::orderBy('nome')->get();
        $categorias_apresentacoes = Categoria_Apresentacao::orderBy('nome')->get();
        return view('apresentacao.form')->with(['apresentadores' => $apresentadores, 'categorias_apresentacoes' => $categorias_apresentacoes]);
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'apresentador_id' => 'required',
            'categoria_apresentacao_id' => 'required',
        ], [
            'titulo.required' => "O título é obrigatório!",
            'apresentador_id.required' => "O apresentador é obrigatório!",
            'categoria_apresentacao_id.required' => "A categoria é obrigatório!",
        ]);

        $dados = [
            'titulo' => $request->titulo,
            'apresentador_id' => $request->apresentador_id,
            'categoria_apresentacao_id' => $request->categoria_apresentacao_id,
            'descricao' => $request->descricao,
            'imagem' => $request->imagem,
        ];

        $imagem = $request->file('imagem');
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/apresentacao/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Apresentacao::create($dados);

        return redirect('apresentacao')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Apresentacao $apresentacao)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $apresentacao = Apresentacao::find($id); //select * from apresentacao where id = $id

        $apresentadores = Apresentador::orderBy('nome')->get();
        $categorias_apresentacoes = Categoria_Apresentacao::orderBy('nome')->get();

        return view('apresentacao.form')->with([
            'apresentacao' => $apresentacao,
            'apresentadores' => $apresentadores,
            'categorias_apresentacoes' => $categorias_apresentacoes
        ]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Apresentacao $apresentacao)
    {
        $request->validate([
            'titulo' => 'required',
            'apresentador_id' => 'required',
            'categoria_apresentacao_id' => 'required',
        ], [
            'titulo.required' => "O título é obrigatório!",
            'apresentador_id.required' => "O apresentador é obrigatório!",
            'categoria_apresentacao_id.required' => "A categoria é obrigatório!",
        ]);

        $dados = [
            'titulo' => $request->titulo,
            'apresentador_id' => $request->apresentador_id,
            'categoria_apresentacao_id' => $request->categoria_apresentacao_id,
            'descricao' => $request->descricao,
        ];

        $imagem = $request->file('imagem');
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/apresentacao/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Apresentacao::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return redirect('apresentacao')->with('success', "Atualizado com sucesso!");
    }

    /**
     * Remove o registro do banco de dados 
     */
    public function destroy($id)
    {
        $apresentacao = Apresentacao::findOrFail($id);

        $apresentacao->delete();

        return redirect('apresentacao')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados 
     */
    public function search(Request $request)
    {
        if (!empty($request->valor)) {
            $apresentacoes = Apresentacao::where(
                $request->tipo,
                'like',
                "%" . $request->valor . "%"
            )->get();
        } else {
            $apresentacoes = Apresentacao::all();
        }

        return view('apresentacao.list')->with(['apresentacoes' => $apresentacoes]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Charts\GraficoNotasEventos;
use App\Models\Avaliacao;
use App\Models\User;
use App\Models\Evento;

use Illuminate\Http\Request;  

class AvaliacaoController extends Controller
{
    /**
     * Carrega a listagem de dados
     */
    public function index()
    {
        $avaliacoes = Avaliacao::all();

        return view('avaliacao.list')->with(['avaliacoes'=> $avaliacoes]);
    }

    /**
     * Carrega o formulário 
     */
    public function create()
    {
        $usuarios = User::orderBy('name')->get();
        $eventos = Evento::orderBy('nome')->get();
        return view('avaliacao.form')->with(['usuarios'=> $usuarios, 'eventos'=> $eventos]);
    }

    /**
     * Salva os dados do formulário 
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'evento_id'=>'required',
            'nota'=>'required|integer|min:1|max:10',
        ],[
            'user_id.required'=>"O usuário é obrigatorio!",
            'evento_id.required'=>"O evento é obrigatorio!",
            'nota.required'=>"A nota é obrigatoria!",
            'nota.integer'=>"A nota é um número inteiro!",
            'nota.min'=>"O mínimo para a nota é 0!",
            'nota.max'=>"O máximo para a nota é 10!",
        ]);

        $dados = [
            'user_id'=> $request->user_id,
            'evento_id'=> $request->evento_id,
            'nota'=> $request->nota,
            'descricao'=> $request->descricao,
            'imagem'=> $request->imagem,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/avaliacao/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Avaliacao::create($dados);

        return redirect('avaliacao')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $avaliacao = Avaliacao::find($id); //select * from avaliacao where id = $id
        $usuarios = User::orderBy('name')->get();
        $eventos = Evento::orderBy('nome')->get();
        return view('avaliacao.form')->with(['avaliacao'=> $avaliacao, 'usuarios'=> $usuarios, 'eventos'=> $eventos]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Avaliacao $avaliacao)
    {
        $request->validate([
            'user_id'=>'required',
            'evento_id'=>'required',
            'nota'=>'required|integer|min:1|max:10',
        ],[
            'user_id.required'=>"O usuário é obrigatorio!",
            'evento_id.required'=>"O evento é obrigatorio!",
            'nota.required'=>"A nota é obrigatoria!",
            'nota.integer'=>"A nota é um número inteiro!",
            'nota.min'=>"O mínimo para a nota é 0!",
            'nota.max'=>"O máximo para a nota é 10!",
        ]);

        $dados = [
            'user_id'=> $request->user_id,
            'evento_id'=> $request->evento_id,
            'nota'=> $request->nota,
            'descricao'=> $request->descricao,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/avaliacao/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Avaliacao::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('avaliacao')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $avaliacao = Avaliacao::findOrFail($id);

        $avaliacao->delete();

        return redirect('avaliacao')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $avaliacoes = Avaliacao::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $avaliacoes = Avaliacao::all();
        }

        return view('avaliacao.list')->with(['avaliacoes'=> $avaliacoes]);
    }

    public function chart(GraficoNotasEventos $eventosNotas){

        return view('avaliacao.chart')->with([
            'eventosNotas'=>  $eventosNotas->build(),
        ]);
    }
}

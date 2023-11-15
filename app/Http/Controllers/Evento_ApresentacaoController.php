<?php

namespace App\Http\Controllers;
use App\Models\Evento_Apresentacao;
use App\Models\Apresentacao;
use App\Models\Evento;

use Illuminate\Http\Request;

class Evento_ApresentacaoController extends Controller
{
    /**
     * Carrega a listagem de dados 
     */
    public function index()
    {
        $eventos_apresentacoes = Evento_Apresentacao::all();

        return view('evento_apresentacao.list')->with(['eventos_apresentacoes'=> $eventos_apresentacoes]);
    }

    /** 
     * Carrega o formulário
     */
    public function create()
    {
        $apresentacoes = Apresentacao::orderBy('titulo')->get();
        $eventos = Evento::orderBy('nome')->get();
        return view('evento_apresentacao.form')->with(['apresentacoes'=> $apresentacoes, 'eventos'=> $eventos]);
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'apresentacao_id'=>'required',
            'evento_id'=>'required',
            'hora_inicio'=>'required|date_format:H:i',
            'hora_fim'=>'date_format:H:i|after:hora_inicio'
        ],[
            'apresentacao_id.required'=>"A apresentação é obrigatoria!",
            'evento_id.required'=>"O evento é obrigatorio!",
            'hora_inicio.required'=>"A hora de início é obrigatoria!",
            'hora_inicio.date_format'=>"Coloque um horário válido na hora de início!",
            'hora_fim.date_format'=>"Coloque um horário válido na hora de fim!",
            'hora_fim.after'=>"A hora de fim deve ser depois da hora de início!",
        ]);

        $dados = [
            'apresentacao_id'=> $request->apresentacao_id, 
            'evento_id'=> $request->evento_id,
            'hora_inicio'=> $request->hora_inicio,
            'hora_fim'=> $request->hora_fim,
        ];

        Evento_Apresentacao::create($dados);

        return redirect('evento_apresentacao')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Evento_Apresentacao $evento_apresentacao)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $evento_apresentacao = Evento_Apresentacao::find($id); //select * from evento_apresentacao where id = $id

        $apresentacoes = Apresentacao::orderBy('titulo')->get();
        $eventos = Evento::orderBy('nome')->get();

        return view('evento_apresentacao.form')->with(['evento_apresentacao'=> $evento_apresentacao,'apresentacoes'=> $apresentacoes, 'eventos'=> $eventos]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Evento_Apresentacao $evento_apresentacao)
    {
        $request->validate([
            'apresentacao_id'=>'required',
            'evento_id'=>'required',
            'hora_inicio'=>'required|date_format:H:i',
            'hora_fim'=>'date_format:H:i|after:hora_inicio'
        ],[
            'apresentacao_id.required'=>"A apresentação é obrigatoria!",
            'evento_id.required'=>"O evento é obrigatorio!",
            'hora_inicio.required'=>"A hora de início é obrigatoria!",
            'hora_inicio.date_format'=>"Coloque um horário válido na hora de início!",
            'hora_fim.date_format'=>"Coloque um horário válido na hora de fim!",
            'hora_fim.after'=>"A hora de fim deve ser depois da hora de início!",
        ]);

        $dados = [
            'apresentacao_id'=> $request->apresentacao_id,
            'evento_id'=> $request->evento_id,
            'hora_inicio'=> $request->hora_inicio,
            'hora_fim'=> $request->hora_fim,
        ];

        Evento_Apresentacao::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('evento_apresentacao')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $evento_apresentacao = Evento_Apresentacao::findOrFail($id);

        $evento_apresentacao->delete();

        return redirect('evento_apresentacao')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $eventos_apresentacoes = Evento_Apresentacao::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $eventos_apresentacoes = Evento_Apresentacao::all();
        }

        return view('evento_apresentacao.list')->with(['eventos_apresentacoes'=> $eventos_apresentacoes]);
    }
}

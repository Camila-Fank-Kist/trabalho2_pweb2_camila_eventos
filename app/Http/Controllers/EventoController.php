<?php

namespace App\Http\Controllers;

use App\Models\Categoria_Evento;
use App\Models\Evento;
use App\Models\Evento_Apresentacao;
use App\Models\Evento_Item; 
use App\Models\Local;
use PDF;

use Illuminate\Http\Request; 

class EventoController extends Controller
{
    /**
     * Carrega a listagem de dados  
     */
    public function index()
    {
        $eventos = Evento::with('evento_apresentacao','pedido','avaliacao','apresentacoes')->get();
        //dd($eventos); //apresentacoes (n-n) não tá funcionando: lista só 1

        return view('evento.list')->with(['eventos'=> $eventos]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        $categorias_eventos = Categoria_Evento::orderBy('nome')->get();
        $locais = Local::orderBy('nome')->get();
        return view('evento.form')->with(['categorias_eventos'=> $categorias_eventos, 'locais'=> $locais]);
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'categoria_evento_id'=>'required',
            'local_id'=>'required',
            'data'=>'required|date',
            'hora_inicio'=>'required|date_format:H:i',
            'hora_fim'=>'date_format:H:i|after:hora_inicio',
            'precoBRL'=>'required|numeric',
        ],[
            'nome.required'=>"O :atributo é obrigatorio!",
            'categoria_evento_id.required'=>"O :atributo é obrigatorio!",
            'local_id.required'=>"O :atributo é obrigatorio!",
            'data.required'=>"O :atributo é obrigatorio!",
            'hora_inicio.required'=>"O :atributo é obrigatorio!",
            'precoBRL.required'=>"O :atributo é obrigatorio!",
            'hora_inicio.date_format'=>"Coloque um horário válido na :atributo !",
            'hora_fim.date_format'=>"Coloque um horário válido na :atributo !",
            'hora_fim.after'=>"A :atributo deve ser depois da hora_inicio!",
            'precoBRL.numeric'=>"Coloque um valor numérico em :atributo !",
        ]); 

        $dados = [
            'nome'=> $request->nome,
            'categoria_evento_id'=> $request->categoria_evento_id,
            'local_id'=> $request->local_id,
            'data'=> $request->data,
            'hora_inicio'=> $request->hora_inicio,
            'hora_fim'=> $request->hora_fim,
            'descricao'=> $request->descricao,
            'precoBRL'=> $request->precoBRL,
            'imagem'=> $request->imagem,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/evento/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Evento::create($dados);

        return redirect('evento')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $evento = Evento::find($id); //select * from evento where id = $id

        $categorias_eventos = Categoria_Evento::orderBy('nome')->get();
        $locais = Local::orderBy('nome')->get();

        return view('evento.form')->with([
            'evento'=> $evento, 
            'categorias_eventos'=> $categorias_eventos, 
            'locais'=> $locais]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nome'=>'required',
            'categoria_evento_id'=>'required',
            'local_id'=>'required',
            'data'=>'required|date',
            'hora_inicio'=>'required|date_format:H:i',
            'hora_fim'=>'date_format:H:i|after:hora_inicio',
            'precoBRL'=>'required|numeric',
        ],[
            'nome.required'=>"O :atributo é obrigatorio!",
            'categoria_evento_id.required'=>"O :atributo é obrigatorio!",
            'local_id.required'=>"O :atributo é obrigatorio!",
            'data.required'=>"O :atributo é obrigatorio!",
            'hora_inicio.required'=>"O :atributo é obrigatorio!",
            'precoBRL.required'=>"O :atributo é obrigatorio!",
            'hora_inicio.date_format'=>"Coloque um horário válido na :atributo !",
            'hora_fim.date_format'=>"Coloque um horário válido na :atributo !",
            'hora_fim.after'=>"A :atributo deve ser depois da hora_inicio!",
            'precoBRL.numeric'=>"Coloque um valor numérico em :atributo !",
        ]);

        $dados = [
            'nome'=> $request->nome,
            'categoria_evento_id'=> $request->categoria_evento_id,
            'local_id'=> $request->local_id,
            'data'=> $request->data,
            'hora_inicio'=> $request->hora_inicio,
            'hora_fim'=> $request->hora_fim,
            'descricao'=> $request->descricao,
            'precoBRL'=> $request->precoBRL,
            'imagem'=> $request->imagem,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/evento/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Evento::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('evento')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);

        $evento->delete();

        return redirect('evento')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $eventos = Evento::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $eventos = Evento::all();
        }

        return view('evento.list')->with(['eventos'=> $eventos]);
    }

    public function report(){
        $eventos = Evento::orderBy('data')->get();

        $data = [
            'title'=>"Relatório - Listagem de Eventos",
            'eventos'=> $eventos
        ];

        $pdf = PDF::loadView('evento.report', $data)->setPaper('a4', 'landscape');

        return $pdf->download("listagem_eventos.pdf");
}
}

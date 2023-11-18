<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class ApresentacoesEventoController extends Controller
{
    /*
    public function index($id)
    {
        //$id = 6; 
        $idUsuario = $id;
        $pedidosUsuario = User::with('pedido')->find($id);
        //dd($pedidosUsuario->pedido);

        return view('pedidosUsuario.list')->with(['pedidosUsuario'=> $pedidosUsuario->pedido, 'idUsuario'=>$idUsuario]);
    }
    */
    public function index($id)
    {
        //$id = 6;
        $eventosApresentacaoEvento = Evento::with('evento_apresentacao', 'pedido', 'avaliacao', 'apresentacoes')->find($id);
        //dd($eventosApresentacaoEvento->evento_apresentacao);
        //dd($EventosApresentacaoEvento[0]->evento_apresentacao[0]->apresentacao->titulo);

        //fazer um for para percorrer os itens (os evento_apresentacao) 
        //e de cada evento_apresentacao pegar ->apresentacao->titulo

        return view('apresentacoesEvento.list')->with(['eventosApresentacaoEvento' => $eventosApresentacaoEvento->evento_apresentacao]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
    /*
        $categorias_eventos = Categoria_Evento::orderBy('nome')->get();
        $locais = Local::orderBy('nome')->get();
        return view('evento.form')->with(['categorias_eventos' => $categorias_eventos, 'locais' => $locais]);
    */
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
    /*
        $request->validate([
            'nome' => 'required',
            'categoria_evento_id' => 'required',
            'local_id' => 'required',
            'data' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fim' => 'date_format:H:i|after:hora_inicio',
            'precoBRL' => 'required|numeric',
        ], [
            'nome.required' => "O nome é obrigatório!",
            'categoria_evento_id.required' => "A categoria é obrigatória!",
            'local_id.required' => "O local é obrigatório!",
            'data.required' => "data é obrigatória!",
            'hora_inicio.required' => "A hora de início é obrigatória!",
            'precoBRL.required' => "O preço é obrigatório!",
            'hora_inicio.date_format' => "Coloque um horário válido na hora de início!",
            'hora_fim.date_format' => "Coloque um horário válido na hora de fim!",
            'hora_fim.after' => "A hora de fim deve ser depois da hora de início!",
            'precoBRL.numeric' => "Coloque um valor numérico no preço!",
        ]);

        $dados = [
            'nome' => $request->nome,
            'categoria_evento_id' => $request->categoria_evento_id,
            'local_id' => $request->local_id,
            'data' => $request->data,
            'hora_inicio' => $request->hora_inicio,
            'hora_fim' => $request->hora_fim,
            'descricao' => $request->descricao,
            'precoBRL' => $request->precoBRL,
            'imagem' => $request->imagem,
        ];

        $imagem = $request->file('imagem');
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/evento/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Evento::create($dados);

        return redirect('evento')->with('success', "Cadastrado com sucesso!");
    */
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
    /*
        $evento = Evento::find($id); //select * from evento where id = $id

        $categorias_eventos = Categoria_Evento::orderBy('nome')->get();
        $locais = Local::orderBy('nome')->get();

        return view('evento.form')->with([
            'evento' => $evento,
            'categorias_eventos' => $categorias_eventos,
            'locais' => $locais
        ]);
    */
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nome' => 'required',
            'categoria_evento_id' => 'required',
            'local_id' => 'required',
            'data' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fim' => 'date_format:H:i|after:hora_inicio',
            'precoBRL' => 'required|numeric',
        ], [
            'nome.required' => "O nome é obrigatório!",
            'categoria_evento_id.required' => "A categoria é obrigatória!",
            'local_id.required' => "O local é obrigatório!",
            'data.required' => "data é obrigatória!",
            'hora_inicio.required' => "A hora de início é obrigatória!",
            'precoBRL.required' => "O preço é obrigatório!",
            'hora_inicio.date_format' => "Coloque um horário válido na hora de início!",
            'hora_fim.date_format' => "Coloque um horário válido na hora de fim!",
            'hora_fim.after' => "A hora de fim deve ser depois da hora de início!",
            'precoBRL.numeric' => "Coloque um valor numérico no preço!",
        ]);

        $dados = [
            'nome' => $request->nome,
            'categoria_evento_id' => $request->categoria_evento_id,
            'local_id' => $request->local_id,
            'data' => $request->data,
            'hora_inicio' => $request->hora_inicio,
            'hora_fim' => $request->hora_fim,
            'descricao' => $request->descricao,
            'precoBRL' => $request->precoBRL,
        ]; //a imagem não vem aqui pq o formulário tá vazio, então independente se a pessoa tiver selecionado uma imagem ou não, vai substituir

        $imagem = $request->file('imagem');
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/evento/";
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Evento::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

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
        if (!empty($request->valor)) {
            $eventos = Evento::where(
                $request->tipo,
                'like',
                "%" . $request->valor . "%"
            )->get();
        } else {
            $eventos = Evento::all();
        }

        return view('evento.list')->with(['eventos' => $eventos]);
    }
}

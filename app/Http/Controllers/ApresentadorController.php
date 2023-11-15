<?php

namespace App\Http\Controllers;
use App\Models\Apresentador;

use Illuminate\Http\Request; 

class ApresentadorController extends Controller 
{
    /**
     * Carrega a listagem de dados
     */
    public function index()
    {
        $apresentadores = Apresentador::with('apresentacao')->get();
        //dd($apresentadores); //funcionando

        return view('apresentador.list')->with(['apresentadores'=> $apresentadores]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        return view('apresentador.form');
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|max:100',
            'data_nascimento'=>'date'
        ],[
            'nome.required'=>"O :atributo é obrigatorio!",
            'nome.max'=>" Só são permitidos 100 caracteres no :attribute !",
            'nome.date'=>" A :attribute é uma data!",
        ]);

        $dados = [
            'imagem'=> $request->imagem,
            'nome'=> $request->nome,
            'telefone'=> $request->telefone,
            'data_nascimento'=> $request->data_nascimento,
            'biografia'=> $request->biografia,
            'website'=> $request->website,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/apresentador/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Apresentador::create($dados);

        return redirect('apresentador')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Apresentador $apresentador)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $apresentador = Apresentador::find($id); //select * from apresentador where id = $id

        return view('apresentador.form')->with(['apresentador'=> $apresentador]);
    }

    /**
     * Atualiza os dados do formulário 
     */
    public function update(Request $request, Apresentador $apresentador)
    {
        $request->validate([
            'nome'=>'required|max:100',
            'data_nascimento'=>'date'
        ],[
            'nome.required'=>"O :atributo é obrigatorio!",
            'nome.max'=>" Só são permitidos 100 caracteres no :attribute !",
            'nome.date'=>" A :attribute é uma data!",
        ]);

        $dados = [
            'nome'=> $request->nome,
            'telefone'=> $request->telefone,
            'data_nascimento'=> $request->data_nascimento,
            'biografia'=> $request->biografia,
            'website'=> $request->website,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/apresentador/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Apresentador::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('apresentador')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $apresentador = Apresentador::findOrFail($id);

        $apresentador->delete();

        return redirect('apresentador')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $apresentadores = Apresentador::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $apresentadores = Apresentador::all();
        }

        return view('apresentador.list')->with(['apresentadores'=> $apresentadores]);
    }
}

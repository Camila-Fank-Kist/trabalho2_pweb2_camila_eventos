<?php

namespace App\Http\Controllers;
use App\Models\Local;
use App\Models\Tipo_Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Carrega a listagem de dados 
     */
    public function index()
    {
        $locais = Local::with('evento')->get();
        //dd($locais); //funcionando

        return view('local.list')->with(['locais'=> $locais]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        $tipos_locais = Tipo_Local::orderBy('nome')->get();
        return view('local.form')->with(['tipos_locais'=> $tipos_locais]);
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'capacidade'=>'required|integer|min:1',
            'telefone'=>'required',
            'endereco'=>'required',
        ],[
            'nome.required'=>"O :atributo é obrigatorio!",
            'capacidade.required'=>"O :atributo é obrigatorio!",
            'telefone.required'=>"O :atributo é obrigatorio!",
            'endereco.required'=>"O :atributo é obrigatorio!",
            'capacidade.integer'=>"A :atributo é um número inteiro!",
            'capacidade.min'=>"O mínimo de :atributo é 1!",
        ]);

        $dados = [
            'nome'=> $request->nome,
            'tipo_local_id'=> $request->tipo_local_id, 
            'capacidade'=> $request->capacidade,
            'website'=> $request->website,
            'telefone'=> $request->telefone,
            'endereco'=> $request->endereco, //futuramente: endereco_id
            'descricao'=> $request->descricao,
            'imagem'=> $request->imagem,
        ];

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/local/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Local::create($dados);

        return redirect('local')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $local = Local::find($id); //select * from local where id = $id

        $tipos_locais = Tipo_Local::orderBy('nome')->get();

        return view('local.form')->with([
            'local'=> $local,
            'tipos_locais'=> $tipos_locais,
        ]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Local $local)
    {
        $request->validate([
            'nome'=>'required',
            'capacidade'=>'required|integer|min:1',
            'telefone'=>'required',
            'endereco'=>'required',
        ],[
            'nome.required'=>"O :atributo é obrigatorio!",
            'capacidade.required'=>"O :atributo é obrigatorio!",
            'telefone.required'=>"O :atributo é obrigatorio!",
            'endereco.required'=>"O :atributo é obrigatorio!",
            'capacidade.integer'=>"A :atributo é um número inteiro!",
            'capacidade.min'=>"O mínimo de :atributo é 1!",
        ]);

        $dados = [
            'nome'=> $request->nome,
            'tipo_local_id'=> $request->tipo_local_id, 
            'capacidade'=> $request->capacidade,
            'website'=> $request->website,
            'telefone'=> $request->telefone,
            'endereco'=> $request->endereco, //futuramente: endereco_id 
            'descricao'=> $request->descricao,
        ];
        /*dd($dados);*/

        $imagem = $request->file('imagem');
        if($imagem){
            $nome_arquivo = date('YmdHis').'.'.$imagem->getClientOriginalExtension();
            $diretorio = "imagem/local/";
            $imagem->storeAs($diretorio,$nome_arquivo,'public');
            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Local::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('local')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados 
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);

        $local->delete();

        return redirect('local')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados 
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $locais = Local::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $locais = Local::all();
        }

        return view('local.list')->with(['locais'=> $locais]);
    }
}

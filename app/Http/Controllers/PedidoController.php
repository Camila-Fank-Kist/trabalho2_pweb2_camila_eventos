<?php

namespace App\Http\Controllers;

use App\Charts\GraficoPedidos;
use App\Models\Pedido;
use App\Models\Evento;
use App\Models\Pagamento;
use App\Models\User;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Carrega a listagem de dados   
     */ 

    public function index()
    {
        $pedidos = Pedido::with('user', 'evento')->get();
        //dd($pedidos[3]->quantidade * $pedidos[3]->evento->precoBRL);

        return view('pedido.list')->with(['pedidos'=> $pedidos]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        $eventos = Evento::orderBy('nome')->get();
        $pagamentos = Pagamento::orderBy('nome')->get();
        
        return view('pedido.form')->with(['eventos'=> $eventos, 'pagamentos'=> $pagamentos]);
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'evento_id'=>'required',
            'quantidade'=>'required|integer|min:1',
        ],[
            'evento_id.required'=>"O evento é obrigatório!",
            'quantidade.required'=>"A quantidade é obrigatória!",
            'quantidade.integer'=>"A quantidade é um número inteiro!",
            'quantidade.min'=>"O mínimo para a quantidade é 1!",
        ]);

        $dados = [
            'user_id'=> $request->user_id,
            'evento_id'=> $request->evento_id,
            'quantidade'=> $request->quantidade,
            'pagamento_id'=> $request->pagamento_id,
        ];

        Pedido::create($dados);

        return redirect('pedido')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id); //select * from pedido where id = $id

        $eventos = Evento::orderBy('nome')->get();
        $pagamentos = Pagamento::orderBy('nome')->get();

        return view('pedido.form')->with([
            'pedido'=> $pedido,
            'eventos'=> $eventos, 
            'pagamentos'=> $pagamentos]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'evento_id'=>'required',
            'quantidade'=>'required|integer|min:1',
        ],[
            'evento_id.required'=>"O evento é obrigatório!",
            'quantidade.required'=>"A quantidade é obrigatória!",
            'quantidade.integer'=>"A quantidade é um número inteiro!",
            'quantidade.min'=>"O mínimo para a quantidade é 1!",
        ]);

        $dados = [
            'user_id'=> $request->user_id,
            'evento_id'=> $request->evento_id,
            'quantidade'=> $request->quantidade,
            'pagamento_id'=> $request->pagamento_id,
        ];

        Pedido::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('pedido')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);

        $pedido->delete();

        return redirect('pedido')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $pedidos = Pedido::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $pedidos = Pedido::all();
        }

        return view('pedido.list')->with(['pedidos'=> $pedidos]);
    }

    public function chart(GraficoPedidos $pedidos){
        return view('pedido.chart')->with([
            'pedidos'=>  $pedidos->build(),
        ]);
    }

    // Generate PDF
    public function report() {
        $pedidos = Pedido::all();

        $data = [
            'title'=>"Relatório - Listagem de Pedidos",
            'pedidos'=> $pedidos,
        ];

        $pdf = PDF::loadView('pedido.report', $data);

        // download PDF file with download method
        return $pdf->download('listagem_pedidos.pdf');
      }
}

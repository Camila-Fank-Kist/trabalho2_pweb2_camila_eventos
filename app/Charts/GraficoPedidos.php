<?php

namespace App\Charts;

use App\Models\Evento;
use App\Models\Pedido;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Database\Eloquent\Casts\Json as CastsJson;
use stdClass;

//quantidade de ingressos vendidos por evento
class GraficoPedidos
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
 
    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {

        /*for($i = 0; $i < 10; $i++){
            $pedidos[$i];
        }*/
        //$eventos = Evento::with('pedido')->get();

        $eventos = Evento::all();
        $i = 0;
        //$string_nome_evento = '';
        //$string_qtdTotalIngressosVendidosPorEVENTO = '';
        foreach ($eventos as $item){
            //$qtdEventos = count($eventos);
            //count($item->pedido);
            $qtdTotalIngressosVendidos = 0;
            foreach ($item->pedido as $itemPedido){
                $qtdIngressosVendidosPorPedido = $itemPedido->quantidade;
                $qtdTotalIngressosVendidos += $qtdIngressosVendidosPorPedido;
            }
            //if(!empty($qtdTotalIngressosVendidos)){
                $nome_evento[$i] = $item->nome;
                //$string_nome_evento .= $item->nome . "," . " ";
            //}
            //echo var_dump($nome_evento[$i] . ': ' . $qtdTotalIngressosVendidos . ' ingressos vendidos.');
            
            $qtdTotalIngressosVendidosEVENTO[$i] = $qtdTotalIngressosVendidos;
            echo var_dump($nome_evento[$i] . ': ' . $qtdTotalIngressosVendidosEVENTO[$i] . ' ingressos vendidos.');
            //$string_qtdTotalIngressosVendidosPorEVENTO .= $qtdTotalIngressosVendidos . "," . " ";
            $i++;
            //$item->pedido->quantidade;
            //$item->evento->nome;
        }

        $objectQtdIngressos = new stdClass();
        foreach ($qtdTotalIngressosVendidosEVENTO as $key => $value)
        {
            $objectQtdIngressos->$key = $value;
        }
        $objectEventos = new stdClass();
        foreach ($nome_evento as $key => $value)
        {
            $objectEventos->$key = $value;
        }
        echo var_dump("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
        echo var_dump($objectQtdIngressos);
        echo var_dump($objectEventos);
        //echo var_dump($string_nome_evento);
        //echo var_dump($string_qtdTotalIngressosVendidosPorEVENTO);

        /*foreach ($nome_evento as $item){
            echo var_dump('AAAAAAAAAA'.$item);
        }
        foreach ($qtdTotalIngressosVendidosEVENTO as $item){
            echo var_dump('AAAAAAAAAA'.$item);
        }*/
        

        /*$pedidos = Pedido::all();

        foreach ($pedidos as $item){
            $item->evento->nome;
        }

        if(!empty($request->valor)){
            $pedidos = Pedido::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $pedidos = Pedido::all();
        }*/

        return $this->chart->horizontalBarChart()
            ->setTitle('Quantidade de ingressos vendidos por evento.')
            //->setSubtitle('Wins during season 2021.')
            ->setColors(['#be123c'])//['#FFC107', '#D32F2F']
            ->addData('Ingressos vendidos', [$objectQtdIngressos]) //quantidade de pedidos //$qtdTotalIngressosVendidosEVENTO->all()
            //->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis([$objectEventos]); //eventos
    }

    // pedido(=1) * quantidade + pedido(=1) * quantidade + ... + pedido(=1) * quantidade = total de ingressos
    //
}

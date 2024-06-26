<?php

namespace App\Charts;

use App\Models\Evento;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Database\Eloquent\Casts\Json as CastsJson;
use stdClass;

class GraficoPedidos
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $eventos = Evento::all();
        $i = 0;
        foreach ($eventos as $item) {
            $qtdTotalIngressosVendidos = 0;
            foreach ($item->pedido as $itemPedido) {
                $qtdIngressosVendidosPorPedido = $itemPedido->quantidade;
                $qtdTotalIngressosVendidos += $qtdIngressosVendidosPorPedido;
            }
            $eventoArray[$i] = $item->nome;
            $qtdIngressos[$i] = $qtdTotalIngressosVendidos;
            $i++;
        }

        return $this->chart->horizontalBarChart()
            ->setTitle('Quantidade de ingressos vendidos por evento.')
            //->setSubtitle('Wins during season 2021.')
            ->setColors(['#be123c']) //['#FFC107', '#D32F2F']
            ->addData('Ingressos vendidos', $qtdIngressos) //quantidade de pedidos //$qtdIngressos->all()
            //->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis($eventoArray); //eventos
    }
}

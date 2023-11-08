<?php

namespace App\Charts;

use App\Models\Avaliacao;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficoNotasEventos
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        /*$avaliacoes = Avaliacao::all();
        $notas = "";
        foreach ($avaliacoes as $item){
            $notas .= $item->nota . "," . " ";
        }
        echo var_dump($notas);*/

        /*$avaliacoes = Avaliacao::all();
        $SomaNotas = 0;
        foreach ($avaliacoes as $item){
            $SomaNotas += $item->nota;
        }
        $MediaNotas = $SomaNotas / count($avaliacoes);
        echo var_dump($SomaNotas);
        echo var_dump($MediaNotas);*/

        $avaliacoesNota10 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '10'."%"
        )->get();
        //if(!empty($avaliacoesNota10)){
            $qtdAvaliacoesNota10 = count($avaliacoesNota10);
            /*$SomaNotas10 = 0;
            foreach ($avaliacoesNota10 as $item){
                $SomaNotas10 += $item->nota;
            }*/
            //$MediaNotas10 = $SomaNotas10 / $qtdAvaliacoesNota10;
            //echo var_dump($SomaNotas10);
            //echo var_dump($MediaNotas10);
            //echo var_dump($qtdAvaliacoesNota10);
        //}

        $avaliacoesNota9 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '9'."%"
        )->get();
        $qtdAvaliacoesNota9 = count($avaliacoesNota9);
        //echo var_dump($qtdAvaliacoesNota9);

        $avaliacoesNota8 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '8'."%"
        )->get();
        $qtdAvaliacoesNota8 = count($avaliacoesNota8);
        //echo var_dump($qtdAvaliacoesNota8);

        $avaliacoesNota7 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '7'."%"
        )->get();
        $qtdAvaliacoesNota7 = count($avaliacoesNota7);
        //echo var_dump($qtdAvaliacoesNota7);

        $avaliacoesNota6 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '6'."%"
        )->get();
        $qtdAvaliacoesNota6 = count($avaliacoesNota6);
        //echo var_dump($qtdAvaliacoesNota6);

        $avaliacoesNota5 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '5'."%"
        )->get();
        $qtdAvaliacoesNota5 = count($avaliacoesNota5);
        //echo var_dump($qtdAvaliacoesNota5);

        $avaliacoesNota4 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '4'."%"
        )->get();
        $qtdAvaliacoesNota4 = count($avaliacoesNota4);
        /*$SomaNotas4 = 0;
        foreach ($avaliacoesNota4 as $item){
            $SomaNotas4 += $item->nota;
        }
        $qtdAvaliacoesNota4 = count($avaliacoesNota4);
        $MediaNotas4 = $SomaNotas4 / $qtdAvaliacoesNota4;
        echo var_dump($SomaNotas4);
        echo var_dump($MediaNotas4);*/
        //echo var_dump($qtdAvaliacoesNota4);

        $avaliacoesNota3 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '3'."%"
        )->get();
        $qtdAvaliacoesNota3 = count($avaliacoesNota3);
        //echo var_dump($qtdAvaliacoesNota3);

        $avaliacoesNota2 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '2'."%"
        )->get();
        $qtdAvaliacoesNota2 = count($avaliacoesNota2);
        //echo var_dump($qtdAvaliacoesNota2);

        $avaliacoesNota1 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '1'."%"
        )->get();
        $qtdAvaliacoesNota1 = count($avaliacoesNota1);
        //echo var_dump($qtdAvaliacoesNota1);

        $avaliacoesNota0 = Avaliacao::where(
            'nota',
            'like' ,
            "%". '0'."%"
        )->get();
        $qtdAvaliacoesNota0 = count($avaliacoesNota0);
        //echo var_dump($qtdAvaliacoesNota0);

        //echo dd($avaliacoes4);
        

        return $this->chart->pieChart()
            ->setTitle('Relação de notas')
            ->setSubtitle('Quantidade total de cada nota dada.')
            ->addData([$qtdAvaliacoesNota10, $qtdAvaliacoesNota9, $qtdAvaliacoesNota8, $qtdAvaliacoesNota7, $qtdAvaliacoesNota6, $qtdAvaliacoesNota5, $qtdAvaliacoesNota4, $qtdAvaliacoesNota3, $qtdAvaliacoesNota2, $qtdAvaliacoesNota1, $qtdAvaliacoesNota0])//quntidade
            ->setLabels(['10', '9', '8', '7', '6', '5', '4', '3', '2', '1', '0']);
    }
    //futuramente: média de nota de cada evento
}
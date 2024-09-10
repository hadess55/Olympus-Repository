<?php

namespace App\Charts;

use App\Models\HargaProdusen;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;


class HargaProdusenChart extends Chart
{
    public function index()
    {
        // Mengambil data dari model
        $data = HargaProdusen::all();

        // Membuat chart dengan Larapex
        $chart = (new LarapexChart())->lineChart()
            ->setTitle('Harga Produsen')
            ->setSubtitle('Data Harga dari Produsen')
            ->addData('Beras Premium', $data->pluck('beras_premium')->toArray())
            ->addData('Jagung Pipilan Kering', $data->pluck('jagung_pipilan_kering')->toArray())
            ->setXAxis($data->pluck('tanggal')->toArray());

        return view('pages.home.user', compact('chart'));
    }
}

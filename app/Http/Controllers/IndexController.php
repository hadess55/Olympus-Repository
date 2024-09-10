<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Hargakonsumen;
use App\Models\HargaProdusen;
use App\Models\PublikasiPangan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
/**
 * Index Page Controller
 * @category  Controller
 */
class IndexController extends Controller{
	/**
     * index Action
     * @return View
     */
	function index(){

        $publikasiPangan = PublikasiPangan::with('kecamatan')
        ->orderBy('date_updated', 'desc')
        ->orderBy('date_created', 'desc')
        ->take(3)
        ->get();

        // $data = HargaProdusen::orderBy('tanggal', 'desc')->take(3)->get();
        $data = HargaProdusen::with('kecamatan')->orderBy('tanggal', 'desc')->take(7)->get();
		// $data = HargaProdusen::orderBy('tanggal', 'desc')->take(5)->get()->reverse();
        // $data2 = Hargakonsumen::orderBy('tanggal', 'desc')->take(5)->get()->reverse();

		// $data = HargaProdusen::all();
		// $data2 = Hargakonsumen::all();

		$labels = $data->map(function($item) {
            return $item->tanggal . "|" . ($item->kecamatan?->nama ?? '');
        });

        $chart = (new LarapexChart())->barChart()
        ->setTitle('Harga Produsen Terakhir')
        ->setSubtitle('Data Produsen Terakhir')
        ->addData('Beras Premium', $data->pluck('beras_premium')->toArray())
        ->addData('Beras Medium', $data->pluck('beras_medium')->toArray())
        ->addData('GKP Petani', $data->pluck('gkp_petani')->toArray())
        ->addData('GKG Penggilingan', $data->pluck('gkg_penggilingan')->toArray())
        ->addData('Jagung Pipilan Kering', $data->pluck('jagung_pipilan_kering')->toArray())
        ->addData('Ubi Kayu', $data->pluck('ubi_kayu')->toArray())
        ->addData('Ubi Jalar', $data->pluck('ubi_jalar')->toArray())
        ->addData('Kedelai Lokal Kering', $data->pluck('kedelai_lokal_kering')->toArray())
        ->addData('Cabe Besar', $data->pluck('cabe_besar')->toArray())
        ->addData('Cabe Rawit Merah', $data->pluck('cabe_rawit_merah')->toArray())
        ->addData('Cabe Keriting', $data->pluck('cabe_keriting')->toArray())
        ->addData('Bawang Merah', $data->pluck('bawang_merah')->toArray())
        ->addData('Daging Ayam', $data->pluck('daging_ayam')->toArray())
        ->addData('Daging Sapi', $data->pluck('daging_sapi')->toArray())
        ->addData('Telur Ayam Ras', $data->pluck('telur_ayam_ras')->toArray())
        ->addData('Pisang', $data->pluck('pisang')->toArray())
        ->addData('Jeruk', $data->pluck('jeruk')->toArray())
        ->setXAxis($labels->toArray())
        ->setGrid(true) 
        ->setHeight(500);

        return view('pages.home.user', compact('chart', 'publikasiPangan'));

		// return view("pages.index.index");
		// return view("pages.home.user");
	}

	/**
     * Login Action
     * @return View
     */
	function login(){
		return view("pages.index.index");
	}
}
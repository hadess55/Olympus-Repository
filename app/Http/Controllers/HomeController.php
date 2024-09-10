<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Hargakonsumen;
use App\Models\HargaProdusen;
use App\Models\PublikasiPangan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends Controller{
	/**
     * Index Action
     * @return \Illuminate\View\View
     */
	function index(){
	// 	$user = auth()->user();
	// 	if($user->hasRole('kecamatan')){
	// 		return view("pages.home.kecamatan");
	// 	}
	// 	else{
	// 		return view("pages.home.index");
	// 	}
	// }
	$user = auth()->user();
        
        if($user->hasRole('kecamatan')){
        $publikasiPangan = PublikasiPangan::with('kecamatan')
        ->orderBy('date_updated', 'desc')
        ->orderBy('date_created', 'desc')
        ->take(3)
        ->get();

        $data = HargaProdusen::with('kecamatan')->orderBy('tanggal', 'desc')->take(7)->get();

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

            return view('pages.home.kecamatan', compact('chart', 'publikasiPangan'));
        }

        else if ($user->roles->count() > 0) {
        $publikasiPangan = PublikasiPangan::with('kecamatan')
        ->orderBy('date_updated', 'desc')
        ->orderBy('date_created', 'desc')
        ->take(3)
        ->get();

        $data = HargaProdusen::with('kecamatan')->orderBy('tanggal', 'desc')->take(7)->get();

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

            return view('pages.home.index', compact('chart', 'publikasiPangan'));
        }
        else {
            return view("pages.home.user");
        }
    }
	
}

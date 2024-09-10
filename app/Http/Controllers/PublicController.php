<?php

namespace App\Http\Controllers;

use App\Models\DataPangan;
use App\Models\Hargakonsumen;
use App\Models\HargaProdusen;
use App\Models\Nbm;
use App\Models\PublikasiPangan;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Tampilkan halaman Data Pangan
     *
     * @return \Illuminate\View\View
     */
    public function dataPangan()
    {
        $dataPangan = DataPangan::with('kecamatan')->get();
        return view('pages.umum.datapanganpublic', compact('dataPangan'));
    }

    /**
     * Tampilkan halaman NBM
     *
     * @return \Illuminate\View\View
     */
    public function nbm()
    {
        $nbm = Nbm::with('kecamatan')->get();
        return view('pages.umum.nbmpublic', compact('nbm'));
    }

    /**
     * Tampilkan halaman Publikasi Pangan
     *
     * @return \Illuminate\View\View
     */
    public function publikasiPangan()
    {
        $publikasiPangan = PublikasiPangan::with('kecamatan')->get();
        return view('pages.umum.publikasipanganpublic', compact('publikasiPangan'));
    }

    /**
     * Tampilkan halaman Data Harga
     *
     * @return \Illuminate\View\View
     */
    public function dataHarga()
    {
        return view('public.data_harga', [
            'pageTitle' => 'Data Harga'
        ]);
    }
    public function hargaKonsumen()
    {
        $hargaKonsumen = Hargakonsumen::with('kecamatan')->paginate(10);
        return view('pages.umum.hargakonsumenpublic', compact('hargaKonsumen'));
    }
    public function hargaProdusen()
    {
        $hargaProdusen = HargaProdusen::with('kecamatan')->paginate(10);
        return view('pages.umum.hargaprodusenpublic', compact('hargaProdusen'));
    }

    public function chartHargaProdusen(){
    
        

    }
}

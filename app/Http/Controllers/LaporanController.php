<?php

namespace App\Http\Controllers;

use App\Services\LaporanService;
use App\Services\PaketService;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    private LaporanService $laporanService;
    private PaketService $paketService;
    public function __construct(){
        $this->laporanService = new LaporanService;
        $this->paketService = new PaketService;
    }
    /**
     * Tampilkan List Laporan
     */
    public function index(){
        $laporan = $this->laporanService->getAllLaporan();
        return view('Laporan/laporan-list', compact('laporan'));
        // dd($laporan);
    }


    public function detail($date){
        $paket = $this->paketService->findByDate($date);
        return view('Laporan/laporan-detail', compact('paket', 'date'));
    }

    /**
     * Cetak Laporan
     */
    public function cetak($date){
        $paket = $this->paketService->findByDate($date);
        $this->laporanService->exportToExel($date, $paket);
        return redirect("/laporan/$date");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Tampilkan List Laporan
     */
    public function index(){
        return view('');
    }

    /**
     * Detail Laporan
     */
    public function detail(string $tanggal){

    }

    /**
     * Cetak Laporan
     */
    public function cetak(){
        
    }
}

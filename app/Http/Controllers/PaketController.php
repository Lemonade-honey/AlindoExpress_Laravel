<?php

namespace App\Http\Controllers;

use App\Services\PaketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    private PaketService $paketService;
    public function __construct(){
        $this->paketService = new PaketService();
    }

    /**
     * GET List Paket
     */
    public function listPaket(){
        $paket = $this->paketService->getAllPaket();
        return view('Paket/paket-list', compact('paket'));
    }

    /**
     * GET Create Paket
     */
    public function createPaket(){
        return view('Paket/paket-create');
    }

    public function postCreatePaket(Request $request){
        $request->validate([
            'kota-asal' => 'required',
            'kota-tujuan' => 'required',
            'jumlah-koli' => 'required',
            'harga-kg' => 'required',
            'berat-paket' => 'required',
            'kategori-paket' => 'required',
            'nama-pengirim' => 'required',
            'hp-pengirim' => 'required',
            'nama-penerima' => 'required',
            'alamat-penerima' => 'required',
            'hp-penerima' => 'required',
            'biaya-kirim' => 'required',
            'total-biaya' => 'required'
        ]);

    }

    /**
     * Resi Generate
     * 
     * @return string 
     */
    private function resiGenerator(): string{
        $resi = DB::table('pakets')
        ->select('resi')->orderByDesc('resi')->first();

        if($resi != null){
            $resiSplit = str_split($resi->resi, 6);
            if($resiSplit[0] == date('dmy')){
                $resi = $resiSplit[0] . $this->autoIncrementResi($resiSplit[1]);
            }else{
                $resi = date('dmy') . '0000';
            }
        }else{
            $resi = date('dmy') . '0000';
        }
        return $resi;
    }

    /**
     * Resi 4 Digit Increment
     */
    private function autoIncrementResi(string $last4digit){
        (int)$kode = ltrim($last4digit, 0);
        if($kode == null){
            $kode = 1;
        }else{
            $kode = $kode + 1;
        }
        return (string)str_pad($kode, 4, '0', STR_PAD_LEFT);
    }

    public function test(){
        // dd(date('d-m-Y, H:i:s'));
        // $kode = '0010';
        print_r($this->resiGenerator());
        // echo $this->autoIncrementResi($kode);
    }
}

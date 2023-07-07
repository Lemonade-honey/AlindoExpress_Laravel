<?php

namespace App\Http\Controllers;

use App\Services\PaketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PaketController extends Controller
{
    private PaketService $paketService;
    public function __construct()
    {
        $this->paketService = new PaketService();
    }

    /**
     * GET List Paket
     */
    public function listPaket()
    {
        $paket = $this->paketService->getAllPaket();
        return view('Paket/paket-list', compact('paket'));
    }

    /**
     * GET Create Paket
     */
    public function createPaket()
    {
        return view('Paket/paket-create');
    }
    /**
     * POST Create Paket
     */
    public function postTambahPaket(Request $request)
    {
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
        try {
            $response = $this->paketService->tambahPaket($request->all());
            return redirect(route('paket.show', $response->resi));
        } catch (Throwable $ex) {
            return $ex->getMessage();
        }
    }

    public function detailPaket($resi)
    {
        $paket = $this->paketService->findByResi($resi);
        return view('Paket/paket-detail', compact('paket'));
        // return "berhasil ditambah (menampilkan detail paket) - resi : " . $resi;
    }

    /**
     * DD Output Test
     */
    public function DD($resi){
        $paket = $this->paketService->findByResi($resi);
        dd($paket);
    }
}

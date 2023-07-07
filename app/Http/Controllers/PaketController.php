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
        try {
            $response = $this->paketService->tambahPaket($request->all());
            return redirect(route('paket.show', $response->resi));
        } catch (Throwable $ex) {
            return $ex->getMessage();
        }
    }

    public function detailPaket($resi)
    {
        return "berhasil ditambah (menampilkan detail paket) - resi : " . $resi;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Services\LaporanService;
use App\Services\PaketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class PaketController extends Controller
{
    private PaketService $paketService;
    private LaporanService $laporanService;
    public function __construct()
    {
        $this->paketService = new PaketService();
        $this->laporanService = new LaporanService;
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
            // laporan
            $this->laporanService->addOrIgnore(date('d-m-Y'));
            return redirect(route('paket.show', $response->resi));
        } catch (Throwable $ex) {
            die($ex->getMessage());
        }
    }

    public function detailPaket($resi)
    {
        $role = Auth::user()->role;
        $paket = $this->paketService->findByResi($resi);
        return view('Paket/paket-detail', compact('paket', 'role'));
        // return "berhasil ditambah (menampilkan detail paket) - resi : " . $resi;
    }

    public function setStatusPaket($resi, $status){
        $paket = $this->paketService->findByResi($resi);
        if($paket != null){
            $history = $paket->history_paket;
            
            array_push($history, "Update Status => " . Auth::user()->name .", Paket Status Set To ". $status ." [" . date('H:i, d M Y') . "]");
            $paket = DB::table('pakets')->where('resi', $resi)->update(['status_paket' => $status, "history_paket" => serialize($history)]);

            return redirect('/paket/' . $resi)->with('succsess', 'Paket berhasil di Update');
        }else{
            die('Paket Tidak ditemukan');
        }
        
    }

    /**
     * GET Vendor Paket
     */
    public function vendor($resi){
        $paket = $this->paketService->findByResi($resi);
        if($paket != null){
            $vendor = $paket->vendor_paket;
            return view('Paket/paket-vendor', compact('vendor', 'paket'));
        }else{
            return redirect("/paket")->with("errors", "Data Tidak Ada");
        }
    }

    /**
     * POST Vendor Paket
     */
    public function postVendor($resi, Request $request){
        $request->validate([
            'nama-vendor' => 'required',
            'kota-vendor' => 'required',
            'harga-vendor' => 'required|numeric'
        ]);
        try{
            $this->paketService->setVendor($request->all(), $resi);
            return redirect("/paket/$resi")->with('succsess', 'Vendor Berhasil di Update');
        } catch (Throwable $th){
            return redirect()->back()->withErrors($th->getMessage());
        }
    }

    /**
     * GET hapus vendor
     */
    public function deleteVendor($resi){
        if($this->paketService->deleteVendor($resi)){
            return redirect("/paket/$resi");
        }
    }

    /**
     * GET Cetak Invoice
     */
    public function cetakInvoice($resi){
        $paket = $this->paketService->findByResi($resi);
        return view('Paket/paket-cetak-invoice', compact('paket'));
    }

    /**
     * DD Output Test
     */
    public function DD(){
        // $data = DB::table('pakets')->select(DB::raw('DATE(created_at) as date_only'))->distinct()->get();
        // dd($data);
        $paket = $this->paketService->findByResi('1007230000');

        dd($paket);
    }
}

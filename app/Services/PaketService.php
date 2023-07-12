<?php

namespace App\Services;

use App\Models\Paket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class PaketService
{
    /**
     * Get All Paket DESC Id
     */
    public function getAllPaket()
    {
        $paket = DB::table('pakets')
            ->select('resi', 'data_paket', 'status_paket', 'created_at')
            ->orderBy('id', 'desc')
            ->paginate(5);

        $paket->map(function ($paket) {
            $paket->data_paket = unserialize($paket->data_paket);
        });

        return $paket;
    }
    
    /**
     * GET Paket By Resi
     */
    public function findByResi($resi){
        $paket = DB::table('pakets')
        ->where('resi', $resi)
        ->limit(1)
        ->first();

        if($paket != null){
            $paket->data_paket = unserialize($paket->data_paket);
            $paket->biaya_paket = unserialize($paket->biaya_paket);
            $paket->vendor_paket = unserialize($paket->vendor_paket);
            $paket->history_paket = unserialize($paket->history_paket);
        }

        return $paket;
    }

    /**
     * GET Paket by date
     */
    public function findByDate($date){
        $tahun = date("Y", strtotime($date));
        $bulan = date("m", strtotime($date));
        $paket = DB::table('pakets')
        ->whereMonth('created_at', '=', $bulan)
        ->whereYear('created_at', '=', $tahun)
        ->get();

        $paket->map(function ($paket) {
            $paket->data_paket = unserialize($paket->data_paket);
            $paket->biaya_paket = unserialize($paket->biaya_paket);
        });
        return $paket;
    }

    public function tambahPaket(array $data)
    {
        $dataPaket = [
            "kota_asal" => $data['kota-asal'],
            "kota_tujuan" => $data['kota-tujuan'],
            "jumlah_koli" => $data['jumlah-koli'],
            "berat" => 20,
            "berat_volume" => $data['berat-paket'],
            "harga_kilo" => $data['harga-kg'],
            "kategori" => $data['kategori-paket'],
            "periksa" => 'Periksa-data',
            "nama_pengirim" => $data['nama-pengirim'],
            "hp_pengirim" => $data['hp-pengirim'],
            "nama_penerima" => $data['nama-penerima'],
            "alamat_penerima" => $data['alamat-penerima'],
            "hp_penerima" => $data['hp-penerima']
        ];

        $biayaPaket = [
            "biaya_kirim" => $data['biaya-kirim'],
            "biaya_lainnya" => "biaya-lain",
            "biaya_total" => $data['total-biaya']
        ];

        $updatePaket = [
            "Create Invoice => " . Auth::user()->name ." [" . date('H:i, d M Y') . "]"
        ];

        $tambahData = Paket::create([
            'resi' => $this->generateKodeResi(),
            'data_paket' => serialize($dataPaket),
            'biaya_paket' => serialize($biayaPaket),
            'history_paket' => serialize($updatePaket),
            'status_paket' => 'Proses'
        ]);

        // laporan
        
        return $tambahData;
    }

    private function generateKodeResi()
    {

        // check last input resi di database
        try {
            $lastInputKode = Paket::orderBy('id', 'desc')->first();
            $lastInputKode = $lastInputKode->resi;
        } catch (Throwable $th) {
            $lastInputKode = null;
        }

        if ($lastInputKode != null) {
            // bagi kode menjadi 2 bagian
            $lastInputKode = str_split($lastInputKode, 6);
            if ($lastInputKode[0] == date('dmy')) {
                $kodeResi = $lastInputKode[0] . $this->autoIncrementKodeResi($lastInputKode[1]);
            } else {
                $kodeResi = date('dmy') . '0000';
            }
        } else {
            // jika isi database kosong
            $kodeResi = date('dmy') . '0000';
        }

        return $kodeResi;
    }

    /**
     * AUTO INCREMENT KODE RESI
     * 
     * menambahkan secara otoamatis pada 4 digit angka terakhir kode resi
     */
    private function autoIncrementKodeResi(string $lastDigitKode): string
    {
        // ubah/hapus prefix 0 didepan real number
        (int)$lastDigitKode = ltrim($lastDigitKode, 0);

        if ($lastDigitKode == null) {
            //jika tidak ada angka di real number/ == 0
            $lastDigitKode = 1;
        } else {
            // jika ada angka real maka incrementkan (++)
            $lastDigitKode = $lastDigitKode + 1;
        }

        return (string)str_pad($lastDigitKode, 4, '0', STR_PAD_LEFT);
    }

    /**
     * SET Vendor
     */
    public function setVendor($data, $resi){
        $vendor = [
            'nama-vendor' => $data['nama-vendor'],
            'kota-vendor' => $data['kota-vendor'],
            'harga-vendor' => $data['harga-vendor']
        ];
        $history = DB::table('pakets')->select('history_paket')->limit(1)->first();
        if($history != null){
            $history = unserialize($history->history_paket);
            array_push($history, "Update Vendor => " . Auth::user()->name ." [" . date('H:i, d M Y') . "]");

            DB::table('pakets')->where(['resi' => $resi])
            ->update([
                'vendor_paket' => serialize($vendor),
                'history_paket' => serialize($history),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }else{
            die("data is null");
        }
    }

    public function deleteVendor($resi){
        $history = DB::table('pakets')->select('history_paket')->limit(1)->first();
        if($history != null){
            $history = unserialize($history->history_paket);
            array_push($history, "Delete Vendor => " . Auth::user()->name ." [" . date('H:i, d M Y') . "]");

            $paket = DB::table('pakets')->where(['resi' => $resi])
            ->update([
                'vendor_paket' => null,
                'history_paket' => serialize($history),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return true;
        }else{
            return false;
        }
    }
}
<?php

namespace App\Services;

use App\Models\Paket;
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
            ->select('resi', 'data_paket')
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

        $paket->data_paket = unserialize($paket->data_paket);
        $paket->biaya_paket = unserialize($paket->biaya_paket);

        return $paket;
    }

    public function tambahPaket(array $data)
    {
        $dataPaket = [
            "kota_asal" => $data['kota-asal'],
            "kota_tujuan" => $data['kota-tujuan'],
            "jumlah_koli" => $data['jumlah-koli'],
            "berat" => 20,
            "berat_volume" => $data['berat-volume'],
            "harga_kilo" => $data['harga-kg'],
            "kategori" => $data['kategori-barang'],
            "periksa" => 'Periksa-data',
            "nama_pengirim" => $data['nama-pengirim'],
            "hp_pengirim" => $data['nohp-pengirim'],
            "nama_penerima" => $data['nama-penerima'],
            "alamat_penerima" => $data['alamat-penerima'],
            "hp_penerima" => $data['nohp-penerima']
        ];

        $biayaPaket = [
            "biaya_kirim" => $data['biaya-kirim'],
            "biaya_lainnya" => "biaya-lain",
            "biaya_total" => $data['total']
        ];

        $tambahData = Paket::create([
            'resi' => $this->generateKodeResi(),
            'data_paket' => serialize($dataPaket),
            'biaya_paket' => serialize($biayaPaket),
            'history_paket' => 'history-paket',
            'status_paket' => 'Proses'
        ]);

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
}
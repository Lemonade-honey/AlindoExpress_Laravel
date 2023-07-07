<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyPaket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_paket = 'a:13:{s:9:"kota_asal";s:10:"Yogyakarta";s:11:"kota_tujuan";s:7:"Jakarta";s:11:"jumlah_koli";s:1:"2";s:5:"berat";s:2:"20";s:12:"berat_volume";s:2:"50";s:10:"harga_kilo";s:4:"2000";s:8:"kategori";s:17:"alat rumah tangga";s:7:"periksa";s:9:"Diperiksa";s:13:"nama_pengirim";s:5:"daffa";s:11:"hp_pengirim";s:7:"1231234";s:13:"nama_penerima";s:5:"lemon";s:15:"alamat_penerima";s:7:"jakarta";s:11:"hp_penerima";s:9:"123345345";}';
        $biaya_paket = 'a:3:{s:11:"biaya_kirim";s:6:"100000";s:13:"biaya_lainnya";N;s:11:"biaya_total";s:6:"100000";}';
        $history_paket = 'a:1:{i:0;s:50:"Create Invoice =>  nama orang [20:17, 06 Jul 2023]";}';
        $status = 'proses';

        for($i = 1; $i < 10; $i++){
            $paket = [
                'resi' => date('dmy') . str_pad($i, 4, '0', STR_PAD_LEFT),
                'data_paket' => $data_paket,
                'biaya_paket' => $biaya_paket,
                'history_paket' => $history_paket,
                'status_paket' => $status
            ];

            Paket::create($paket);

        }
    }
}

<?php
namespace App\Services;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;

class LaporanService{

    public function getAllLaporan(){
        $laporan = DB::table('laporan_rekap')->select('rekap')->paginate(10);

        return $laporan;
    }
    public function addOrIgnore($date){
        $date = $this->convert($date);
        if($this->findLaporan($date) == null){
            $laporan = DB::table('laporan_rekap')->insert([
                'rekap' => $date
            ]);

            return $laporan;
        }
    }

    public function findLaporan($date){
        $date = $this->convert($date);
        $laporan = DB::table('laporan_rekap')->where(['rekap' => $date])->get();

        return $laporan;
    }

    public function findPaketByDate($date){
        $date = $this->convert($date);
    }

    private function convert($date){
        $date = date('m-Y', strtotime($date));
        return $date;
    }
}
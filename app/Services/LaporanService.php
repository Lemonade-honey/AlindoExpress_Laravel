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
        if(!DB::table('laporan_rekap')->where(['rekap' => $date])->exists()){
            $laporan = DB::table('laporan_rekap')->insert([
                'rekap' => $date,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return true;
        }else{
            return false;
        }
    }

    private function convert($date){
        $date = date('m-Y', strtotime($date));
        return $date;
    }
}
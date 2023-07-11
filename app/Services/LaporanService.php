<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;

class LaporanService{
    public function addOrIgnore($date){
        $bulan = date('m-Y', strtotime($date));

        echo $date;
    }
}
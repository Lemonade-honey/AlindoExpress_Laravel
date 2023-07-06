<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;

class PaketService{

    /**
     * Get All Paket DESC Id
     */
    public function getAllPaket(){
        $paket = DB::table('pakets')
        ->select('resi', 'data_paket')
        ->orderBy('id', 'desc')
        ->paginate(5);
        
        $paket->map(function ($paket){
            $paket->data_paket = unserialize($paket->data_paket);
        });

        return $paket;
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'resi',
        'data_paket',
        'biaya_paket',
        'history_paket',
        'status_paket'
    ];
}

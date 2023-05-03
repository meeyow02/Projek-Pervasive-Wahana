<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailWahana extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_wahana',
        'durasi',
        'max_player',
        'jumlah_antrian',
        'paket',
        'biaya',
        'id_syarat',
        'id_barcode'
    ];

}

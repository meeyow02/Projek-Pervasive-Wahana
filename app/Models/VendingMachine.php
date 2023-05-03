<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendingMachine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'stok_barang',
        'harga',
        'id_barcode'
    ];
}

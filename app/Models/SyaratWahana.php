<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratWahana extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tb',
        'bb',
        'id_penyakit',
    ];

}

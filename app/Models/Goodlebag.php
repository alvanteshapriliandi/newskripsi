<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goodlebag extends Model
{
    //
    protected $fillable = [
        'GD_userid', 
        'GD_productid', 
        'GD_model', 
        'GD_ukuran', 
        'GD_bahan', 
        'GD_sisi', 
        'GD_jumlah',
        'GD_warna',
        'GD_total',
        'GD_deskripsi',
        'GD_images',
        'GD_cetak'
    ];
    public $table = "goodlebags";
}

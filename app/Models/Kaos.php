<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kaos extends Model
{
    //
    protected $fillable = [
        'KS_userid', 
        'KS_productid', 
        'KS_description', 
        'KS_images', 
        'KS_bahan', 
        'KS_warna', 
        'KS_ukuran',
        'KS_depan',
        'KS_belakang',
        'KS_pemesanan',
        'KS_total',
    ];
    public $table = "kaos";
}

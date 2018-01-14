<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bantalfoto extends Model
{
    //
    protected $fillable = [
        'BT_userid', 
        'BT_productid', 
        'BT_description', 
        'BT_images', 
        'BT_model', 
        'BT_kain', 
        'BT_ukuran',
        'BT_warna',
        'BT_pemesanan',
        'BT_total',
        'BT_cetak'
    ];
    public $table = "bantalfotos";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = [
        'BN_userid', 
        'BN_productid', 
        'BN_description',
        'BN_images', 
        'BN_ukuran', 
        'BN_jenis', 
        'BN_pemesanan', 
        'BN_total',
    ];
    public $table = "banners";
}

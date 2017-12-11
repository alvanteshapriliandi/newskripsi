<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    //
    protected $fillable = [
        'BR_userid', 
        'BR_productid', 
        'BR_perusahaan', 
        'BR_alamat', 
        'BR_tlp', 
        'BR_email', 
        'BR_pemesanan',
        'BR_ukuran',
        'BR_kertas',
        'BR_total',
        'BR_description',
        'BR_images'
    ];
    public $table = "brosurs";
}

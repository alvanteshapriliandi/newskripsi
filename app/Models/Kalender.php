<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    //
    protected $fillable = [
        'KL_userid', 
        'Kl_productid', 
        'KL_perusahaan', 
        'KL_alamat', 
        'KL_tlp', 
        'KL_email', 
        'KL_pemesanan',
        'KL_jilid',
        'KL_kertas',
        'KL_lembar',
        'KL_total',
        'KL_description',
        'KL_images'
    ];
    public $table = "kalenders";
}

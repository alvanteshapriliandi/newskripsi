<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Polo extends Model
{
    //
    protected $fillable = [
        'PL_userid', 
        'PL_productid', 
        'PL_description',	
        'PL_images',
        'PL_material',	
        'PL_metode',
        'PL_depan',	
        'PL_lengan',	
        'PL_Belakang',	
        'PL_warna',	
        'PL_ukuran',	
        'PL_pemesanan',	
        'PL_total'
    ];
    public $table = "polos";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stempel extends Model
{
    //
    protected $fillable = [
        'SM_userid', 
        'SM_productid', 
        'SM_perusahaan',	
        'SM_ukuran',	
        'SM_pemesanan',
        'SM_warna',	
        'SM_total',	
        'SM_description',	
        'SM_images'
    ];
    public $table = "stempels";
}

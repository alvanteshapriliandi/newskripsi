<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    //
    protected $fillable = [
        'PT_userid', 
        'PT_productid', 
        'PT_pemesanan',	
        'PT_ukuran',	
        'PT_kertas',	
        'PT_total',	
        'PT_description',	
        'PT_images',
        'PT_cetak'
    ];
    public $table = "posters";
}

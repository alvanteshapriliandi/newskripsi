<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //
    protected $fillable = [  
        'OF_userid', 
        'OF_productid', 
        'OF_perusahaan',	
        'OF_alamat',	
        'OF_tlp',	
        'OF_email',	
        'OF_pemesanan',
        'OF_kertas',	
        'OF_total',	
        'OF_description',	
        'OF_images',
        'status'
    ];
    public $table = "offices";
}

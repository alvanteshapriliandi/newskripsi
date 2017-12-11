<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    //
    protected $fillable = [
        'KR_userid', 
        'KR_productid', 
        'KR_nama',
        'KR_jabatan',	
        'KR_perusahaan',	
        'KR_alamat',	
        'KR_tlp',	
        'KR_email',	
        'KR_pemesanan',	
        'KR_kertas',	
        'KR_total',	
        'KR_description',
        'KR_images'
    ];
    public $table = "kartus";
}

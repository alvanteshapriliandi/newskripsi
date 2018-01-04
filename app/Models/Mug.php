<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mug extends Model
{
    //
    protected $fillable = [
        'MG_userid', 
        'MG_productid', 
        'MG_description',	
        'MG_images',
        'MG_jenis_mug',	
        'MG_jumlah_mug',	
        'MG_total',
        'MG_cetak'
    ];
    public $table = "mugs";
}

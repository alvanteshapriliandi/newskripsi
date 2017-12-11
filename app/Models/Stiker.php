<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stiker extends Model
{
    //
    protected $fillable = [
        'ST_userid', 
        'ST_productid', 
        'ST_ukuran',	
        'ST_material',	
        'ST_total',	
        'ST_description',	
        'ST_images'
    ];
    public $table = "stikers";
}

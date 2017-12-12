<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'user_id', 
        'kd_invoice', 
        'namaBank', 
        'alamat', 
        'kelurahan', 
        'kecamatan',
        'kota', 
        'images',
    ];
    public $table = "payments";
}

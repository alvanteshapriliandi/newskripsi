<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'BN_ID',
        'BT_ID',
        'BR_ID',
        'GD_ID',
        'KL_ID',
        'KS_ID',
        'KR_ID',
        'MG_ID',
        'OF_ID',
        'PL_ID',
        'PT_ID',
        'SM_ID',
        'ST_ID',
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

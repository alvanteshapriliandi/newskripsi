<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    //
    protected $fillable = [
        'freelancer_id',
        'transaction_id',
        'images',
        'deskripsi_cetak'
    ];
    public $table = "cetaks";
}

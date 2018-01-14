<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    //
    protected $fillable = [
        'status_pengiriman'
    ];
    public $table = "pengirimen";
}

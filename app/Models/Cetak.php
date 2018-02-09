<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    //
    protected $fillable = [
        'order_id',
        'message_id',
        'status'
    ];
    public $table = "cetaks";
}

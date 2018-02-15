<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    //
    protected $fillable = [
        'message_id',
        'status'
    ];
    public $table = "cetaks";
}

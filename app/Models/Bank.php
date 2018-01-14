<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $fillable = [
        'atas_nama',
        'name_bank',
        'images_bank',
        'no_rekening'
    ];
    public $table = "banks";
}

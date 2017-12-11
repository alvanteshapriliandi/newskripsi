<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    //
    protected  $fillable = ['user_id', 'alamat', 'no_tlp', 'no_rekening', 'images'];
    public $table = "freelances";
}

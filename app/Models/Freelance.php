<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    //
    protected  $fillable = ['no_rekening', 'user_id'];
    public $table = "freelances";
}

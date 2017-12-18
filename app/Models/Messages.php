<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //
    protected $fillable = [
        'fr_user_id',
        'to_user_id',	
        'subject',
        'message',	
        'images'
    ];
    public $table = "messages";
}

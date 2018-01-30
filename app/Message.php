<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
      'fr_user_id',
      'to_user_id',
      'order_id',
      'message',
      'images'
    ];
    public $table = 'messages';
}

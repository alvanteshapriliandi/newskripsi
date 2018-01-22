<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
      'id', 
      'user_id'
    ];

    public $table = "carts";
}

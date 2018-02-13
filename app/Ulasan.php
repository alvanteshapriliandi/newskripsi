<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
  protected $fillable = [
    'product_id',
    'user_id',
    'rate',
    'judul',
    'komen'
  ];
  public $table = 'ulasans';
}

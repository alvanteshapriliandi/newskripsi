<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $fillable = [
    'user_id',
    'bank_id',
    'kode_invoice',
    'address',
    'city_id',
    'city_name',
    'province',
    'postal_code',
    'kurir',
    'service',
    'biaya_kurir',
    'images'
  ];
  public $table = "transaction";

  public function orders(){
    return $this->hasMany(Order::class);
  } 
}

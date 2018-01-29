<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    
    'product_id',
    'transaction_id',
    'jenis_kertas',
    'kuantitas',
    'model',
    'kain',
    'ukuran',
    'warna',
    'jenis_cetak',
    'bahan',
    'sisi',
    'jilid',
    'lembar',
    'cetak_depan',
    'cetak_belakang',
    'cetak_lengan_kanan',
    'cetak_lengan_kiri',
    'kaos_metode'
  ];

  public $table = "orders";

  public function transaction () {
    return $this->belonsTo(Transaction::class);
  }
  
  public function product () {
    return $this->belongsTo(Product::class);
  }
}

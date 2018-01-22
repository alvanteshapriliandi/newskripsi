<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Item extends Model
{
  protected $fillable = [
    
    'product_id',
    'cart_id',
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

  public $table = "items";

  public function product() {
    return $this->hasOne(Product::class);
  }
}

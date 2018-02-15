<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected  $fillable = [
        'id',
        'freelancer_id',
        'jdl_Pdk',
        'harga_awal',
        'subcategory_id',
        'description',
        'status'
    ];
    public $table = "products";

    public function images(){
      return $this->hasMany(Image::class);
    } 

    public function materials() {
      return $this->hasMany(Material::class, 'subcategory_id', 'subcategory_id');
    }

    public function ulasans(){
      return $this->hasMany(Ulasan::class);
    }
    // public function freelancer(){
    //     return $this->belongsTo(Freelancer::class);
    // }

    // public function images(){
    //     return $this->hasMany(Image::class);
    // }

    // public function subCategory(){
    //     return $this->belongsTo(SubCategory::class);
    // }

    // public function form(){
    //     return [
    //         'jdl_Pdk' => ' ',
    //         'harga_awal' => ' ',
    //         'kategori' => ' ',
    //         'description' => ' ',
    //         'images' => [
    //             Image::form(),
    //         ]

    //     ];
    // }
}

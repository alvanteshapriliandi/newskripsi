<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected  $fillable = ['id','freelancer_id','jdl_Pdk','hrg_awal','hrg_promo','kategori','subcategory_id','description','images','status'];

    public function freelancer(){
    return $this->belongsTo(Freelance::class);
}

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function subCategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function form(){
        return [
            'jdl_Pdk' => ' ',
            'kategori' => ' ',
            'description' => ' ',
            'images' => [
                Image::form(),
            ]

        ];
    }
}

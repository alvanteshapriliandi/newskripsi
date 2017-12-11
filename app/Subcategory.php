<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category(){
        return $this->belonsTo(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

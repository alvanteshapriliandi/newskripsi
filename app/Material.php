<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function subcategory()
    {
      return $this->belongsTo(Subcategory::class);
    }

    public function product() {
      return $this->belongsTo(Product::class, 'subcategory_id', 'subcategory_id');
    }

    public $table = 'materials';
}

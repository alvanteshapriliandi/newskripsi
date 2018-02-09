<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function subcategory()
    {
      return $this->belongsTo(Subcategory::class);
    }

    public $table = 'materials';
}

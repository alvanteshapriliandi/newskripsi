<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  public $table = "subcategories";

  public function category(){
      return $this->belonsTo(Category::class);
  }
}

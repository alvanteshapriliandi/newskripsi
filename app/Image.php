<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
      'file'
    ];

    public $timestamp = false;

    public function form(){
      return [
        'file'=>'',
      ];
    }
    public function product(){
      return $this->belongsTo(Product::class);
    }
}

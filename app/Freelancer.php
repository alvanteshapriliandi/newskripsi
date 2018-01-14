<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Freelancer extends Model
{
    //
    protected  $fillable = ['id','user_id','alamat', 'no_tlp', 'no_rekening', 'images'];
    public $table = "freelances";

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

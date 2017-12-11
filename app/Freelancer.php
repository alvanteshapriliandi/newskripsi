<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    //
    protected  $fillable = ['id','username','email', 'api_token, alamat','password'];
    public $table = "freelancers";

    public function product(){
        return $this->hasMany(Product::class);
    }
}

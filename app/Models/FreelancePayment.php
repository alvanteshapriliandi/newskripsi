<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreelancePayment extends Model
{
    //
    protected $fillable = [
        'order_id',
        'pendapatan'
    ];
    public $table = "freelancer_payments";
}

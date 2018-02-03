<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'order_id',
        'bank_id',
        'kode_invoice',
        'images',
        'status_transaksi'
    ];
    public $table = "transaction";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
    	'freelancer_id',
       	'order_id',
       	'comment',
    ];
    public $table = "report_comments";
}

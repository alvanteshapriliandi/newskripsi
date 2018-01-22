<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
     protected $fillable = [
     	'subcategory_id',
        'jlh_pesanan',
        'jns_finishing',
        'harga',
        'jns_kertas',	
		'bentuk',
		'ukuran',
		'tipe_jilid',	
		'jlh_lembar',	
		'jns_material',	
		'model_cetak',	
		'bahan',
		'sisi',	
		'jns_mug',	
		'model_bantal',	
		'jenis_kain',	
		'cetak_belakang',	
		'cetak_depan',	
		'cetak_kanan',	
		'cetak_kiri',

    ];
    public $table = "materials";
}

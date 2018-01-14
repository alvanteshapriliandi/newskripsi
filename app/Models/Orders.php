<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable = [	
		'user_id',
		'product_id',
		'Transaction_id',
		'nama',
		'jabatan',
		'nama_perushaan',
		'alamat',
		'no_telepon',
		'email',
		'jenis_kertas',
		'kuantitas',
		'model',
		'kain',
		'ukuran',
		'warna',
		'jenis_cetak',
		'bahan',
		'sisi',
		'jilid',
		'lembar',
		'cetak_depan',
		'cetak_belakang',
		'cetak_lengan_kanan',
		'cetak_lengan_kiri',
		'kaos_metode',
		'images',
		'description',
		'total',
		'status',
		'ket',
		'created_at',
		'updated_at'
    ];
    public $table = "orders";
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('KR_userid')->unsigned();
            $table->integer('KR_productid')->unsigned();
            $table->string('KR_nama');
            $table->string('KR_jabatan');
            $table->string('KR_perusahaan');
            $table->text('KR_alamat');
            $table->string('KR_tlp');
            $table->string('KR_email');
            $table->integer('KR_pemesanan');
            $table->string('KR_kertas');
            $table->string('KR_total');
            $table->string('KR_description')->nullable();
            $table->string('KR_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartus');
    }
}

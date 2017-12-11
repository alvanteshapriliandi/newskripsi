<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodlebagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodlebags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GD_userid')->unsigned();
            $table->integer('GD_productid')->unsigned();
            $table->string('GD_model');
            $table->string('GD_ukuran');
            $table->string('GD_bahan');
            $table->string('GD_sisi');
            $table->string('GD_jumlah');
            $table->string('GD_warna');
            $table->integer('GD_total');
            $table->text('GD_deskripsi');
            $table->text('GD_images');
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
        Schema::dropIfExists('goodlebags');
    }
}

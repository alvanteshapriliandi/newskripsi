<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('KS_userid')->unsigned();
            $table->integer('KS_productid')->unsigned();
            $table->text('KS_description');
            $table->text('KS_images');
            $table->string('KS_bahan');
            $table->string('KS_warna');
            $table->string('KS_ukuran');
            $table->string('KS_depan');
            $table->string('KS_belakang');
            $table->integer('KS_pemesanan');
            $table->integer('KS_total');
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
        Schema::dropIfExists('kaos');
    }
}

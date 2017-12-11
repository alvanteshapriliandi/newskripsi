<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PL_userid')->unsigned();
            $table->integer('PL_productid')->unsigned();
            $table->text('PL_description');
            $table->text('PL_images');
            $table->string('PL_material');
            $table->string('PL_metode');
            $table->string('PL_depan');
            $table->string('PL_lengan');
            $table->string('PL_Belakang');
            $table->string('PL_warna');
            $table->string('PL_ukuran');
            $table->integer('PL_pemesanan');
            $table->integer('PL_total');
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
        Schema::dropIfExists('polos');
    }
}

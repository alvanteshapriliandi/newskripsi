<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrosursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brosurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('BR_userid')->unsigned();
            $table->integer('BR_productid')->unsigned();
            $table->string('BR_perusahaan');
            $table->text('BR_alamat');
            $table->string('BR_tlp');
            $table->string('BR_email');
            $table->integer('BR_pemesanan');
            $table->string('BR_ukuran');
            $table->string('BR_kertas');
            $table->integer('BR_total');
            $table->text('BR_description');
            $table->text('BR_images');
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
        Schema::dropIfExists('brosurs');
    }
}

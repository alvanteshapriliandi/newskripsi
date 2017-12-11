<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBantalfotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantalfotos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('BT_userid')->unsigned();
            $table->integer('BT_productid')->unsigned();
            $table->text('BT_description');
            $table->text('BT_images');
            $table->string('BT_model');
            $table->string('BT_kain');
            $table->string('BT_ukuran');
            $table->string('BT_warna');
            $table->integer('BT_pemesanan');
            $table->integer('BT_total');
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
        Schema::dropIfExists('bantalfotos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('BN_userid')->unsigned();
            $table->integer('BN_productid')->unsigned();
            $table->text('BN_description');
            $table->text('BN_images');
            $table->string('BN_ukuran');
            $table->string('BN_jenis');
            $table->integer('BN_pemesanan');
            $table->integer('BN_total');
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
        Schema::dropIfExists('banners');
    }
}

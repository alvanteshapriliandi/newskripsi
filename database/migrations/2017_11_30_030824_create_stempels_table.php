<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStempelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stempels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SM_userid')->unsigned();
            $table->integer('SM_productid')->unsigned();
            $table->string('SM_perusahaan');
            $table->string('SM_ukuran');
            $table->integer('SM_pemesanan');
            $table->string('SM_warna');
            $table->integer('SM_total');
            $table->text('SM_description');
            $table->text('SM_iamges');
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
        Schema::dropIfExists('stempels');
    }
}

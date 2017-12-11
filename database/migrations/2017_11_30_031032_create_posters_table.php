<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PT_userid')->unsigned();
            $table->integer('PT_productid')->unsigned();
            $table->integer('PT_pemesanan');
            $table->string('PT_ukuran');
            $table->string('PT_kertas');
            $table->integer('PT_total');
            $table->text('PT_description');
            $table->text('PT_images');
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
        Schema::dropIfExists('posters');
    }
}

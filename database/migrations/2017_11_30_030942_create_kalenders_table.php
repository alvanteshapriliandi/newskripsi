<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalenders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('KL_userid')->unsigned();
            $table->integer('KL_productid')->unsigned();
            $table->string('KL_perusahaan');
            $table->text('KL_alamat');
            $table->string('KL_tlp');
            $table->string('KL_email');
            $table->integer('KL_pemesanan');
            $table->string('KL_jilid');
            $table->string('KL_kertas');
            $table->string('KL_lembar');
            $table->integer('KL_total');
            $table->text('KL_description');
            $table->text('KL_images');
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
        Schema::dropIfExists('kalenders');
    }
}

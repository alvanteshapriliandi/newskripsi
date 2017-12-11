<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('OF_userid')->unsigned();
            $table->integer('OF_productid')->unsigned();
            $table->string('OF_perusahaan');
            $table->text('OF_alamat');
            $table->string('OF_tlp');
            $table->string('OF_email');
            $table->integer('OF_pemesanan');
            $table->string('OF_kertas');
            $table->integer('OF_total');
            $table->text('OF_description');
            $table->text('OF_images');
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
        Schema::dropIfExists('offices');
    }
}

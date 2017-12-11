<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mugs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MG_userid')->unsigned();
            $table->integer('MG_productid')->unsigned();
            $table->text('MG_description');
            $table->text('MG_images');
            $table->string('MG_jenis_mug');
            $table->integer('MG_jumlah_mug');
            $table->integer('MG_total');
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
        Schema::dropIfExists('mugs');
    }
}

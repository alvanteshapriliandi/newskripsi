<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stikers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ST_userid')->unsigned();
            $table->integer('ST_productid')->unsigned();
            $table->string('ST_ukuran');
            $table->string('ST_material');
            $table->integer('ST_total');
            $table->text('ST_description');
            $table->text('ST_images');
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
        Schema::dropIfExists('stikers');
    }
}

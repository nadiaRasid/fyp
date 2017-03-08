<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tajuk');
            $table->text('huraian');
            $table->string('lokasi');
            $table->string('kumpulan_sasaran');
            $table->integer('user_id')->index()->unsigned();
            $table->timestamps();

            //foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('jenis_berita');
            $table->string('tajuk');
            $table->text('huraian');
            $table->date('tarikh');
            $table->time('masa');
            //$table->string('gambar');
            $table->string('lokasi');
            $table->string('tempoh');
            $table->string('kumpulan_sasaran');
            $table->integer('max_peserta');
            $table->string('telephone');
            $table->integer('user_id')->index()->unsigned();
            //$table->integer('category_id');
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
        Schema::dropIfExists('events');
    }
}

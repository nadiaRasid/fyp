<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_categories', function (Blueprint $table) {
            $table->integer('event_id')->index()->unsigned();
            $table->integer('berita_id')->index()->unsigned();
            $table->integer('category_id')->index()->unsigned();

            //foreign key
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('berita_id')->references('id')->on('beritas')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_categories');
    }
}

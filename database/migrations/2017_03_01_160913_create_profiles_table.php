<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('no_matrik');
            //$table->string('profile_picture')->nullable();
            $table->integer('user_id')->index()->unsigned();
            $table->string('full_name')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('jawatan')->nullable();
            $table->string('jabatan')->nullable();
            //$table->string('email');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}

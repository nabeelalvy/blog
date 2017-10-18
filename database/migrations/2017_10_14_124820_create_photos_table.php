<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo_loc');
            $table->integer('user_id');
            $table->integer('trip_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users_tables')
                ->onDelete('cascade');
            $table->foreign('trip_id')
                ->references('id')
                ->on('trips')
                ->onDelete('cascade');
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
        Schema::dropIfExists('photos');
    }
}

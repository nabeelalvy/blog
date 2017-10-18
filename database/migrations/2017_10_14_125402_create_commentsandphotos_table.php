<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsandphotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentsandphotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
            $table->integer('photo_id');
            $table->integer('status')->default(1);
            $table->foreign('photo_id')
                ->references('id')
                ->on('photos')
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
        Schema::dropIfExists('commentsandphotos');
    }
}

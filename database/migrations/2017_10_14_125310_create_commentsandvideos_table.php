<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsandvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentsandvideos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
            $table->integer('video_id');
            $table->integer('status')->default(1);
            $table->foreign('video_id')
                ->references('id')
                ->on('videos')
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
        Schema::dropIfExists('commentsandvideos');
    }
}

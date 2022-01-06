<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id');
            $table->foreignId('writer_id');
            $table->string('title',100);
            $table->string('content');
            $table->text('thumbnail');
            $table->timestamps();

            $table->foreign('topic_id')->references('id')->on('topic');
            $table->foreign('writer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}

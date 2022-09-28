<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('uploader');
            $table->string('channel');
            $table->integer('height');
            $table->integer('width');
            $table->string('thumbnail')->nullable();
            $table->string('display')->nullable();
            $table->integer('thumb_height');
            $table->integer('thumb_width');
            $table->string('video_code');
            $table->string('embed_code');
            $table->string('link');
            $table->text('provider');
            $table->text('desc')->nullable();
            $table->integer('priority')->default(0);
            $table->boolean('status')->default(true);
            $table->integer('views')->nullable();
            $table->boolean('is_upcoming')->default(false);
            $table->boolean('in_slider')->default(false);
            $table->boolean('in_suggestion')->default(false);
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
        Schema::dropIfExists('videos');
    }
};

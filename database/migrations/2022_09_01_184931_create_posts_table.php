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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('desc');
            $table->string('display')->nullable();
            $table->integer('priority')->default(0);
            $table->boolean('status')->default(true);

            $table->string('font_size_title')->default('h1');

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
        Schema::dropIfExists('posts');
    }
};

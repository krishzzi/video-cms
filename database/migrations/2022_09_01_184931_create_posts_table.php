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

            $table->integer('views')->default(0);
            $table->boolean('is_upcoming')->default(false);
            $table->boolean('is_slider')->default(false);
            $table->boolean('is_suggestion')->default(false);
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

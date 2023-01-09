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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('views')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });


        Schema::create('taggables',function (Blueprint $table){
           $table->foreignId('tag_id')->constrained('tags')->onUpdate('cascade')->onDelete('cascade');
           $table->unsignedBigInteger('taggable_id');
           $table->string('taggable_type');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('taggables');
    }
};

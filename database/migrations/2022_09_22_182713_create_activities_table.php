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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->boolean('like')->default(false);
            $table->integer('rate')->default(0);
            $table->boolean('inlist')->default(false);
            $table->boolean('share')->default(false);
            $table->boolean('view')->default(false);
            $table->string('ip');
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('set null');
            $table->timestamps();
        });


        Schema::create('activitiables',function (Blueprint $table){
            $table->foreignId('activity_id')->constrained('activities')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('activitiable_id');
            $table->string('activitiable_type');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
        Schema::dropIfExists('activitiable');
    }
};

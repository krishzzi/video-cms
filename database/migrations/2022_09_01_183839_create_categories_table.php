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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('desc')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('priority')->default(0);
            $table->boolean('status')->default(true);
            $table->integer('views')->default(0);
            $table->timestamps();
        });


        Schema::create('categoryables',function (Blueprint $table){
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('categoryable_id');
            $table->string('categoryable_type');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('categoryables');
    }
};

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
        Schema::create('theme_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('page');
            $table->string('redirect')->nullable();
            $table->json('features')->nullable();
//            $table->string('query')->nullable();
            $table->boolean('status');
            $table->string('type')->nullable();
            $table->foreignId('theme_id')->constrained('themes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('is_default')->default(false);
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
        Schema::dropIfExists('theme_pages');
    }
};

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
        Schema::create('theme_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('component');
            $table->json('attributes')->nullable();
            $table->boolean('status')->default(false);
            $table->json('features')->nullable();
            $table->integer('priority')->default(0);
            $table->boolean('is_default')->default(false);
            $table->foreignId('theme_page_id')->constrained('theme_pages')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('theme_blocks');
    }
};

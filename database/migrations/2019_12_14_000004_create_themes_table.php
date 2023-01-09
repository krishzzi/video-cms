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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_active')->default(false);
            $table->boolean('status')->default(false);
            $table->json('appearance')->nullable();
            $table->string('layout')->nullable();
            $table->boolean('is_default')->default(false);
            $table->foreignId('system_id')->nullable()->constrained('systems')->cascadeOnUpdate()->onDelete('set null');
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
        Schema::dropIfExists('themes');
    }
};

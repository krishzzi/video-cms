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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default(config('app.name'));
            $table->string('theme')->default(config('app.theme'));

            $table->text('header')->nullable();
            $table->text('footer')->nullable();
            $table->string('contact_us')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('age_restrict')->default(false);
            $table->json('meta')->nullable();
            $table->json('social')->nullable();
            $table->boolean('default')->default(false);


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
        Schema::dropIfExists('settings');
    }
};

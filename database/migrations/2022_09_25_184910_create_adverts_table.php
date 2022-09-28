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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('new advert');
            $table->string('provider')->default('private');
            $table->string('type')->nullable();
            $table->string('position');
            $table->dateTime('expire_at');
            $table->string('target_url')->nullable();
            $table->string('target_banner')->nullable();
            $table->integer('target_views');
            $table->text('code')->nullable();
            $table->boolean('finish')->default(false);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('adverts');
    }
};

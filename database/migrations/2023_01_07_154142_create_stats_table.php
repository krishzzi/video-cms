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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->boolean('like')->default(false);
            $table->float('rating',4,2,true)->default(0.00);
            $table->boolean('share')->default(false);
            $table->string('ip');
            $table->json('detail')->nullable();
            $table->timestamps();
        });

        Schema::create('statables',function (Blueprint $table){
            $table->foreignId('stat_id')->constrained('stats')->onUpdate('cascade')->onDelete('cascade');
            $table->morphs('statable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
};

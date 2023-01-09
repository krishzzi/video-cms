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
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->boolean('is_private')->default(false);
            $table->string('target_url')->nullable();
            $table->string('target_banner')->nullable();
            $table->text('code')->nullable();
            $table->dateTime('expire_at')->nullable();

            $table->integer('target_views')->nullable();
            $table->integer('total_views')->default(0);

            $table->string('alignment')->default(\App\Models\Business\Spot::SPOT_SPLASH);
            $table->boolean('is_modal')->default(false);
            $table->integer('cost_per_view')->default(0);

            $table->boolean('active')->default(false);
            $table->string('status')->default(\App\Models\Business\Spot::SPOT_STATUS_DRAFT);

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
        Schema::dropIfExists('spots');
    }
};

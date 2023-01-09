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
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('slug_type')->default(\App\Models\System\System::SLUG_DEFAULT);
            $table->boolean('age_restrict')->default(false);
            $table->string('client_key')->nullable();
            $table->string('client_secret')->nullable();
            $table->text('licence_key')->nullable();
            $table->dateTime('valid_upto')->nullable();
            $table->json('meta')->nullable();
            $table->json('social')->nullable();
            $table->json('additional')->nullable();
            $table->boolean('is_default')->default(false);
            $table->boolean('is_valid')->default(false);
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
        Schema::dropIfExists('systems');
    }
};

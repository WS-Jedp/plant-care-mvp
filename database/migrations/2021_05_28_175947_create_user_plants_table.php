<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plants', function (Blueprint $table) {
            $table->id();

            $table->string('name', 60)->nullable();
            $table->datetime('planted_day')->nullable();
            $table->datetime('next_watered')->nullable();
            $table->datetime('next_sunny')->nullable();
            $table->datetime('next_land')->nullable();
            $table->boolean('watered_state')->default(0);
            $table->boolean('sunny_state')->default(0);
            $table->boolean('land_state')->default(0);

            $table->foreignId('plant_id')->constrained('plants', 'id');

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
        Schema::dropIfExists('user_plants');
    }
}

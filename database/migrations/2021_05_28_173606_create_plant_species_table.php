<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_species', function (Blueprint $table) {
            $table->id();
            $table->string('specie_name');
            $table->text('specie_description');
            $table->unsignedInteger('watered_time')->nullable();
            $table->unsignedInteger('sunny_time')->nullable();
            $table->unsignedInteger('land_time')->nullable();

            $table->foreignId('plant_family_id')->constrained('plant_families');
            $table->foreignId('plant_size_type_id')->constrained('plant_size_types');
            $table->foreignId('plant_flower_type_id')->constrained('plant_flower_types');
            
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
        Schema::dropIfExists('plant_species');
    }
}

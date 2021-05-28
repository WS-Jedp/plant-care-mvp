<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantSpecieHasPlantCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specie_has_characteristics', function (Blueprint $table) {
            $table->foreignId('plant_specie_id')->constrained('plant_species');
            $table->foreignId('plant_characteristic_id')->constrained('plant_characteristics');
            $table->string('value', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specie_has_characteristics');
    }
}

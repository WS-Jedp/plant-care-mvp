<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantObjectHasCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_has_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plant_object_id')->constrained('plant_objects', 'id');
            $table->foreignId('p_obj_characteristic_id')->constrained('plant_object_characteristics', 'id');
            $table->tinyText('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('object_has_characteristics');
    }
}

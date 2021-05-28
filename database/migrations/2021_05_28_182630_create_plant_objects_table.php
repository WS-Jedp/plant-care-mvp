<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_objects', function (Blueprint $table) {
            $table->id();
            $table->string('plant_object_name', 60);
            $table->tinyText('short_description');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('stock')->default(0);
            $table->unsignedBigInteger('price')->default(0);

            $table->foreignId('plant_object_type_id')->constrained('plant_object_types', 'id');
            $table->foreignId('plant_specie_id')->constrained('plant_species', 'id');

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
        Schema::dropIfExists('plant_objects');
    }
}

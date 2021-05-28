<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillHasPlantObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_has_plant_objects', function (Blueprint $table) {
            $table->foreignId('bill_id')->constrained('bills', 'id');
            $table->foreignId('plant_object_id')->constrained('plant_objects', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_has_plant_objects');
    }
}

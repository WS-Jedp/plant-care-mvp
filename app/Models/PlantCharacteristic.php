<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantCharacteristic extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function species()
    {
        return $this->belongsToMany(PlantSpecie::class, 'specie_has_characteristics', 'plant_specie_id', 'plant_characteristic_id');
    }
}

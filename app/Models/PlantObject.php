<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantObject extends Model
{
    use HasFactory;


    public function specie()
    {
        return $this->belongsTo(PlantSpecie::class, 'plant_specie_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(PlantObjectType::class, 'plant_object_type_id', 'id');
    }

    public function characteristics()
    {
        return $this->belongsToMany(PlantObjectCharacteristic::class, 'object_has_characteristics', 'p_obj_characteristic_id', 'plant_object_id');
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class, 'bill_has_plant_objects', 'bill_id', 'plant_object_id');
    }
}

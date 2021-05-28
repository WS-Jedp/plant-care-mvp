<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantObjectCharacteristic extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function plant_objects()
    {
        return $this->belongsToMany(PlantObject::class, 'object_has_characteristics', 'plant_object_id', 'p_obj_characteristic_id');
    }
}

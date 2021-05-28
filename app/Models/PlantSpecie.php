<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantSpecie extends Model
{
    use HasFactory;

    public function flower_type()
    {
        return $this->belongsTo(PlantFlowerType::class, 'plant_flower_type_id', 'id');
    }

    public function size_type()
    {
        return $this->belongsTo(PlantSizeType::class, 'plant_size_type_id', 'id');
    }

    public function family()
    {
        return $this->belongsTo(PlantFlowerType::class, 'plant_family_id', 'id');
    }

    public function characteristics()
    {
        return $this->belongsToMany(PlantCharacteristic::class, 'specie_has_characteristics', 'plant_characteristic_id', 'plant_specie_id');
    }
    
    public function plants()
    {
        return $this->hasMany(Plant::class, 'plant_specie_id', 'id');
    }

    public function plant_objects()
    {
        return $this->hasMany(PlantObject::class, 'plant_specie_id', 'id');
    }
}

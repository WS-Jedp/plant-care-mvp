<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantObjectType extends Model
{
    use HasFactory;

    public function plant_objects()
    {
        return $this->hasMany(PlantObject::class, 'plant_object_type_id', 'id');
    }
}

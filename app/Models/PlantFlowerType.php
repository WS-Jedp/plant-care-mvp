<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantFlowerType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function species()
    {
        return $this->hasMany(PlantSpecie::class, 'plant_flower_type_id', 'id');
    }
}

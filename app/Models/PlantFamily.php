<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantFamily extends Model
{
    use HasFactory;


    public function species()
    {
        return $this->hasMany(PlantSpecie::class, 'plant_family_id', 'id');
    }
}

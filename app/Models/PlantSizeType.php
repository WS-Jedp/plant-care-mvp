<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantSizeType extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function species()
    {
        return $this->hasMany(PlantSpecie::class, 'plant_size_type_id', 'id');
    }
    
}

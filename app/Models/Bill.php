<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function plants()
    {
        return $this->belongsToMany(Plant::class, 'bill_has_plants', 'plant_id', 'bill_id');
    }

    public function object_plants()
    {
        return $this->belongsToMany(PlantObject::class, 'bill_has_plant_objects', 'plant_object_id', 'bill_id');
    }
}

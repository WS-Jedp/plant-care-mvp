<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    public function specie()
    {
        return $this->belongsTo(PlantSpecie::class, 'plant_specie_id', 'id');
    }

    public function user_plants()
    {
        return $this->hasMany(UserPlant::class, 'plant_id', 'id');
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class, 'bill_has_plants', 'bill_id', 'plant_id');
    }
}

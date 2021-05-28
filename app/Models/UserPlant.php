<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlant extends Model
{
    use HasFactory;

    public function plant_detail()
    {
        return $this->belongsTo(Plant::class, 'plant_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(UserPlantImage::class, 'user_plant_id', 'id');
    }

    public function people()
    {
        return $this->belongsToMany(Person::class, 'person_has_plants', 'person_id', 'user_plant_id');
    }

}

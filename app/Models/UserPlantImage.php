<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlantImage extends Model
{
    use HasFactory;

    public function user_plant()
    {
        return $this->belongsTo(UserPlant::class, 'user_plant_id', 'id');
    }
}

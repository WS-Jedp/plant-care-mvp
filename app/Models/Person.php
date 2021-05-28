<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'direction', 'country', 'city', 'birthdate'
    ];

    public function plants()
    {
        return $this->belongsToMany(UserPlant::class, 'person_has_plants', 'user_plant_id', 'person_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'person_id', 'id');
    }

}

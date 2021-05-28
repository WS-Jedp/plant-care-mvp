<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    public $timestamps = false;


    /**
     * Return the one to one relationship with the user
     *
     * Define the relationship one-to-one with the table users.
     *
     * @return User
     **/
    public function user()
    {
        return $this->belongsTo(User::class, 'type_user_id', 'id');
    }
}

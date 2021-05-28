<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\TypeUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $person = new Person();
        $person->name = 'Juanes';
        $person->direction = 'Calle 42';
        $person->country = 'Col';
        $person->city = 'Medellin';
        $person->save();

        $type_user = new TypeUser();
        $type_user->type = 'admin';
        $type_user->save();

        $user = new User();
        $user->email = 'jedp082@gmail.com';
        $user->password = Hash::make('password123');
        $user->type_user_id = 1;
        $user->person_id = 1;
        $user->save();

        // \App\Models\User::factory(10)->create();
    }
}

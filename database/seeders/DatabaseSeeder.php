<?php

namespace Database\Seeders;

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

        // $type_user = new TypeUser();
        // $type_user->type = 'admin';
        // DB::insert('insert into people  (name, direction, country, city, birthdate) values (?, ?, ?, ? ,?)', ['juanes', 'clle 42', 'Col', 'Medellin', new Date('05/02/2001')]);
        // $user = new User();
        // $user->email = 'jedp082@gmail.com';
        // $user->password = new Hash('password123');
        // $user->type_user = 1;
        // $user->person_id = 1;

        // \App\Models\User::factory(10)->create();
    }
}

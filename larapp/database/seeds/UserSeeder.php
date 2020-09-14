<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'SaraCatacora',
            'email' => 'Sara@gmail.net',
            'phone' => 213432432,
            
            'birthdate' => '1988-09-28',
            'gender' => 'Male',
            'address' => 'Springfield',
            'password' => bcrypt('admin'),
            'role' => 'Admin',

            'created_at' => now(),
        ]);

//Factory

            factory(App\User::class, 1000)->create();

    }
}



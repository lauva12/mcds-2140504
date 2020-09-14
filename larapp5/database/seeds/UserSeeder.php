<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'fullname'=>'Jeremias Springfield',
            'phone'=> 3164997,
            'birthdate'=>'1970-08-07',
            'gender'=>'Male',
            'address'=>'Siempre viva',
            'email'=>'JeremiasSpringfield@gmail.com',
            'password'=> bcrypt('admin'),
            'role'=>'Admin',
            'created_at'=>now()
            

            ]);

            $usr=new User;
            $usr->fullname='Homero';
            $usr->email='homero@gmail.com';
            $usr->phone=3165897;
            $usr->birthdate='1980-08-07';
            $usr->gender='Male';
            $usr->address='Avs Siempre Viva';
            $usr->password=bcrypt('customer');
            $usr->created_at=now();
            $usr->save();


    }
}

        
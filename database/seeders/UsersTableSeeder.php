<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create(
           [
               'full_name'=>'Admin',
               'role'=>'admin',
               'email'=>'admin@gmail.com',
               'password'=>bcrypt('123456'),
               'address'=>'uttara',
               'phone_number'=>'01616626263',
               'image'=>'',
           ]
       );

    }
}
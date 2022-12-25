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
      $user = User::create([
          'name' => 'yusuf',
          'email' => 'yosef.abo121@gmail.com',
          'password' => bcrypt('yy12345yy')
      ]);
      $user->attachRole('super_admin');
        $hospital = User::create([
            'name' => 'marchent',
            'email' => 'marchent@gmail.com',
            'password' => bcrypt('yy12345yy')
        ]);
        $hospital->attachRole('marchent');

//        $doctor = User::create([
//            'name' => 'marchent',
//            'email' => 'marchent@gmail.com',
//            'password' => bcrypt('yy12345yy')
//        ]);
//        $doctor->attachRole('doctor');

        $client = User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => bcrypt('yy12345yy')
        ]);
        $client->attachRole('client');
    }




}

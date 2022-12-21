<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@marine.com',
            'role' => 'admin',
            'image' => 'user.png',
            'job' => 'manager',
            'password' => bcrypt('11111111'),
          ]);
    }
}

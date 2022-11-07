<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'austin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'Austin Diogo',
            'email' => 'diogo@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

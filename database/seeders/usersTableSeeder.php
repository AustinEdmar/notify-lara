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
            'name' => 'Austin Edmar',
            'email' => 'austin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

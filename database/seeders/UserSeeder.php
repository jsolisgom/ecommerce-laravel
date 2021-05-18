<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'José Solís Gómez',
            'email' => 'j.solisgom@gmail.com',
            'password' => bcrypt('jose1177')
        ]);
    }
}

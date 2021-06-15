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
            'role'=>'admin',
            'first_name'=>'admin1',
            'last_name'=>'User1',
            'email'=>'admin@admin.com',
            'password'=>'$2y$10$lu1z1x/RDXdL9sULhAKdieHEHqJq7laZkEzCmgvBELYnEeuud2S6m',
             //password:asdf
        ]);
    }
}

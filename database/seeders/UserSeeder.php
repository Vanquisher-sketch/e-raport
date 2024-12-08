<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'nama'     => 'Ivan Taufiq',
            'username'    => 'ivanAdmin',
            'password' => bcrypt('password'),
            'role' => '1'
        ]); 
    }
}

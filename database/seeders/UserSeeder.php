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
        User::create([
            'nama'     => 'Ivan Taufiq',
            'username'    => 'ivanAdmin',
            'password' => bcrypt('password'),
            'email' => 'ivan@gmail.com',
            'role' => '1',
        ]);
        
        User::create([
            'nama' => 'Aldi Sugih',
            'username' => 'alduGuru',
            'password' => bcrypt('password'),
            'email' => 'aldi@gmail.com',
            'role' => '2',
        ]);
    }
}

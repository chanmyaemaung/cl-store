<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                "image" => "https://ui-avatars.com/api/?name=Admin&color=7F9CF5&background=EBF4FF",
                "phone" => "081234567890",
                "email" => "admin@gmail.com",
                "role" => "admin",
                "status" => "active",
                "password" => bcrypt('password')
            ],
            [
                'name' => 'Vendor',
                'username' => 'vendor',
                "image" => "https://ui-avatars.com/api/?name=Vendor&color=7F9CF5&background=EBF4FF",
                "phone" => "081234567891",
                "email" => "vendor@gmail.com",
                "role" => "vendor",
                "status" => "active",
                "password" => bcrypt('password')
            ],
            [
                'name' => 'User',
                'username' => 'user',
                "image" => "https://ui-avatars.com/api/?name=User&color=7F9CF5&background=EBF4FF",
                "phone" => "081234567892",
                "email" => "user@gmail.com",
                "role" => "user",
                "status" => "active",
                "password" => bcrypt('password')
            ]
        ]);
    }
}

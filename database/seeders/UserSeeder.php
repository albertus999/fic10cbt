<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin Al Arifin',
            'email' => 'al.arifin@fic10.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '081234567890',
        ]);

        \App\Models\User::create([
            'name' => 'Al Arifin #2',
            'email' => 'al.arifin2@fic10.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '081234567892',
        ]);

        \App\Models\User::create([
            'name' => 'Al Arifin #3',
            'email' => 'al.arifin3@fic10.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '081234567893',
        ]);

        \App\Models\User::create([
            'name' => 'Al Arifin #4',
            'email' => 'al.arifin4@fic10.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '081234567894',
        ]);

        \App\Models\User::create([
            'name' => 'Al Arifin #5',
            'email' => 'al.arifin5@fic10.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '081234567895',
        ]);
    }
}

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
            'name' => 'Sergey Admin',
            'password' => 'Lokvud',
            'role' => 'admin',
            'phone' => 'Jenna',
            'tasks_completed' => '0'
        ]);

        User::create([
            'name' => 'Reserve Admin',
            'password' => '3224855Jenna',
            'role' => 'admin',
            'phone' => 'Jenna',
            'tasks_completed' => '0'
        ]);
    }
}

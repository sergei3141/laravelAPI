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
            'phone' => '333224855',
            'tasks_completed' => '0'
        ]);
    }
}

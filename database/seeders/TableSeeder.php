<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table::create([
            'name' => 'Javascript_1',
            'base' => 'JavaScript',
            'lesson_num' => 1,
            'mon' => '9:00-10:30',
            'thu' => '9-00-10:30'
        ]);


        Table::create([
            'name' => 'React_1',
            'base' => 'React',
            'lesson_num' => 2,
            'wed' => '10:30-12:00',
            'fri' => '10:30-12:00'
        ]);

        Table::create([
            'name' => 'Моделирование 3D',
            'base' => '3d_MAX',
            'lesson_num' => 3,
            'wed' => '18:00-19:30',
            'sat' => '18:00-19:30',
            'open' => 'Набор открыт до 01.02.2024',
        ]);

        Table::create([
        ]);
        Table::create([
        ]);
        Table::create([
        ]);
        Table::create([
        ]);
        Table::create([
        ]);
        Table::create([
        ]);
        Table::create([
        ]);
        Table::create([
        ]);
        

    }
}

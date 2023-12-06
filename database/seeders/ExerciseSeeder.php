<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::create([
            'tag' => 'test',
            'rank' => '0',
            'link' => '',
            'tests' => 'console.log(func(9,3));console.log(func(-9,3));console.log(func(9.99,0.01));console.log(func(99,0));',
            'testKeys' => "12,-6,10,99",
            'defaultFunction' => "function func (a, b) {}",
            'description' =>  "DB Напишите функцию, которая принимает 2 аргумента и возвращает их сумму. function(9, 3) => 12 function(-9, 3) => -6 function(9.99, 0.01) => 10"
        ]);


        Exercise::create([
            'tag' => 'test',
            'rank' => '0',
            'link' => '',
            'tests' => 'console.log(func(9,3));console.log(func(-9,3));console.log(func(9.99,0.01));console.log(func(99,0));',
            'testKeys' => "6,-12,9.98,99",
            'defaultFunction' => "function func (a, b) {}",
            'description' =>  "DB Напишите функцию, которая принимает 2 аргумента и возвращает их разность. function(9, 3) => 6 function(-9, 3) => -12 function(9.99, 0.01) => 9.98"
        ]);

        

    }
}

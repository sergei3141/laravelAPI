<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;
class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::create([
            'base'=>'JavaScript',
            'group_id' => 1,
            'group'=>'JavaScript_1',
            'lesson_num'=>1,
            'theme'=>'JS-1',
            'marks'=>'1,2,3,4',
            'hw'=>'1,2',
            'cw'=>'5,6'
        ]);
        Lesson::create([
            'base'=>'JavaScript',
            'group_id' => 1,
            'group'=>'JavaScript_1',
            'lesson_num'=>2,
            'theme'=>'JS-2',
            'marks'=>'1,2,3,4',
            'hw'=>'9,10',
            'cw'=>'11'
        ]);

        Lesson::create([
            'base'=>'JavaScript',
            'group_id' => 2,
            'group'=>'JavaScript_2',
            'lesson_num'=>1,
            'theme'=>'HTML',
            'marks'=>'1,2,3,4',
            'hw'=>'12',
            'cw'=>'4,5'
        ]);

        Lesson::create([
            'base'=>'JavaScript',
            'group_id' => 2,
            'group'=>'JavaScript_2',
            'lesson_num'=>2,
            'theme'=>'HTML',
            'marks'=>'1,2,3,4',
            'hw'=>'12',
            'cw'=>'4,5'
        ]);

        Lesson::create([
            'base'=>'JavaScript',
            'group_id' => 2,
            'group'=>'JavaScript_2',
            'lesson_num'=>3,
            'theme'=>'HTML',
            'marks'=>'1,2,3,4',
            'hw'=>'12',
            'cw'=>'4,5'
        ]);
        // Lesson::create([
        //     'base'=>'JavaScript',
        //     'group'=>'JavaScript_0001',
        //     'date'=>'2023-10-30 05:44:33',
        //     'lesson_num'=>2,
        //     'theme'=>'JS',
        //     'marks'=>'[5,6]',
        // ]);
        // Lesson::create([
        //     'base'=>'JavaScript',
        //     'group'=>'JavaScript_0001',
        //     'date'=>'2023-11-01 05:44:33',
        //     'lesson_num'=>3,
        //     'theme'=>'JS',
        //     'marks'=>'[7,8]',
        // ]);
        // Lesson::create([
        //     'base'=>'JavaScript',
        //     'group'=>'JavaScript_0001',
        //     'date'=>'2023-11-02 05:44:33',
        //     'lesson_num'=>4,
        //     'theme'=>'JS',
        //     'marks'=>'[8,9]',
        // ]);
        // Lesson::create([
        //     'base'=>'JavaScript',
        //     'group'=>'JavaScript_0001',
        //     'date'=>'2023-11-03 05:44:33',
        //     'lesson_num'=>5,
        //     'theme'=>'JS',
        //     'marks'=>'[9,10]',
        // ]);
    }
}

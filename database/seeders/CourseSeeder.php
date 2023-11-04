<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Javascript',
            'lesson_num' => 1,
            'theme' => 'Объекты',
            'cw' => json_encode([
                1, 2, 3, 4
            ]),
            'hw' => json_encode([
                4, 5, 6, 7
            ]),
            'pptx' => '/files/present_js.pptx',
            'docx' => '/files/present_js.docx'
        ]);


        Course::create([
            'name' => 'React',
            'lesson_num' => 1,
            'theme' => 'Компоненты react',
            'cw' => json_encode([
                1, 2, 3, 4
            ]),
            'hw' => json_encode([
                4, 5, 6, 7
            ]),
            'pptx' => '/files/present_reacT.pptx',
            'docx' => '/files/present_react.docx'
        ]);

        Course::create([
            'name' => 'Vue',
            'lesson_num' => 1,
            'theme' => 'Компоненты vue',
            'cw' => json_encode([
                1, 2, 3, 4
            ]),
            'hw' => json_encode([
                4, 5, 6, 7
            ]),
            'pptx' => '/files/present_reacT.pptx',
            'docx' => '/files/present_react.docx'
        ]);

    }
}

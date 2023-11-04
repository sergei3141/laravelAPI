<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theme::create([
            'course_id' => 1,
            'name' => 'Объекты',
            'lesson_num' => 1,
            'tasks' => '[1, 2, 3]',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);

        Theme::create([
            'course_id' => 1,
            'name' => 'Classes',
            'lesson_num' => 2,
            'tasks' => '[4]',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);

        Theme::create([
            'course_id' => 2,
            'name' => 'JSX',
            'lesson_num' => 1,
            'tasks' => '[5]',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);

    }
}

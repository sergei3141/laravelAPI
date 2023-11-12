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
            'theme' => 'JS-1',
            'lesson_num' => 1,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-2',
            'lesson_num' => 2,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-3',
            'lesson_num' => 3,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-4',
            'lesson_num' => 4,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-5',
            'lesson_num' => 5,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-6',
            'lesson_num' => 6,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-7',
            'lesson_num' => 7,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 1,
            'theme' => 'JS-8',
            'lesson_num' => 8,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);


        Theme::create([
            'course_id' => 2,
            'theme' => 'React-1',
            'lesson_num' => 9,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 2,
            'theme' => 'React-2',
            'lesson_num' => 9,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 2,
            'theme' => 'React-3',
            'lesson_num' => 9,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 2,
            'theme' => 'React-4',
            'lesson_num' => 9,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 2,
            'theme' => 'React-5',
            'lesson_num' => 9,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);
        Theme::create([
            'course_id' => 2,
            'theme' => 'React-6',
            'lesson_num' => 9,
            'hw' => '1,2,3',
            'cw' => '4,5,6',
            'pptx' => 'link pptx',
            'docx' => 'link docx',
        ]);

    }
}

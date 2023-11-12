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
    {Course::create([
        "name"=> "JavaScript",
    ]);
    Course::create([
        "name"=> "React",
    ]);
    Course::create([
        "name"=> "Frontend",
    ]);
    Course::create([
        "name"=> "3d_MAX",
    ]);

        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 1,
        //     'theme' => 'JS-1',
        //     'cw' => json_encode([
        //         1, 2, 3, 4
        //     ]),
        //     'hw' => json_encode([
        //         4, 5, 6, 7
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 2,
        //     'theme' => 'JS-2',
        //     'cw' => json_encode([
        //         8,9
        //     ]),
        //     'hw' => json_encode([
        //         9,10
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 3,
        //     'theme' => 'JS-3',
        //     'cw' => json_encode([
        //         11,12
        //     ]),
        //     'hw' => json_encode([
        //         13,14
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 4,
        //     'theme' => 'JS-4',
        //     'cw' => json_encode([
        //         15
        //     ]),
        //     'hw' => json_encode([
        //         16,17,18
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 5,
        //     'theme' => 'JS-5',
        //     'cw' => json_encode([
        //         19,20,21
        //     ]),
        //     'hw' => json_encode([
        //         22,23
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 6,
        //     'theme' => 'JS-6',
        //     'cw' => json_encode([
        //         24,25
        //     ]),
        //     'hw' => json_encode([
        //         26,27
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 7,
        //     'theme' => 'JS-7',
        //     'cw' => json_encode([
        //         28
        //     ]),
        //     'hw' => json_encode([
        //         29,30
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 8,
        //     'theme' => 'JS',
        //     'cw' => json_encode([
        //         31,32,33
        //     ]),
        //     'hw' => json_encode([
        //         34,35
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);
        // Course::create([
        //     'name' => 'Javascript',
        //     'lesson_num' => 9,
        //     'theme' => 'JS-9',
        //     'cw' => json_encode([
        //        36,37
        //     ]),
        //     'hw' => json_encode([
        //         38,39
        //     ]),
        //     'pptx' => '/files/present_js.pptx',
        //     'docx' => '/files/present_js.docx'
        // ]);


        // Course::create([
        //     'name' => 'React',
        //     'lesson_num' => 1,
        //     'theme' => 'Компоненты react',
        //     'cw' => json_encode([
        //         1, 2, 3, 4
        //     ]),
        //     'hw' => json_encode([
        //         4, 5, 6, 7
        //     ]),
        //     'pptx' => '/files/present_reacT.pptx',
        //     'docx' => '/files/present_react.docx'
        // ]);

        // Course::create([
        //     'name' => 'Vue',
        //     'lesson_num' => 1,
        //     'theme' => 'Компоненты vue',
        //     'cw' => json_encode([
        //         1, 2, 3, 4
        //     ]),
        //     'hw' => json_encode([
        //         4, 5, 6, 7
        //     ]),
        //     'pptx' => '/files/present_reacT.pptx',
        //     'docx' => '/files/present_react.docx'
        // ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group = Group::create([
            'name' => 'Первая группа',
            'group_num' => 1,
            'course_id' => 1,
            'active' => true,
        ]);

        $group->users()->attach([1, 2]);

        $group = Group::create([
            'name' => 'Вторая группа',
            'group_num' => 2,
            'course_id' => 1,
            'active' => true,
        ]);

        $group->users()->attach([3]);

        $group = Group::create([
            'name' => 'Третья группа',
            'group_num' => 3,
            'course_id' => 2,
            'active' => true,
        ]);

        $group->users()->attach([1, 2, 3]);

//        $group = Group::create([
//            'name' => 'Четвёртая группа',
//            'group_num' => 4,
//            'course_id' => 2,
//            'active' => true,
//        ]);
//
//
//        $group = Group::create([
//            'name' => 'Пятая группа',
//            'group_num' => 5,
//            'course_id' => 3,
//            'active' => false,
//        ]);

    }
}

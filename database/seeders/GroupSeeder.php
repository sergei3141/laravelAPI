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
            'name' => 'JavaScript_1',
            'course_id' => 1,
        ]);

        $group->users()->attach([1, 2]);

        $group = Group::create([
            'name' => 'JavaScript_2',
            'course_id' => 1,
        ]);

        $group->users()->attach([3]);

        $group = Group::create([
            'name' => 'React_1',
            'course_id' => 2,
        ]);

        $group->users()->attach([1, 2, 3]);

//        $group = Group::create([
//            'name' => 'Четвёртая группа',
//            'course_id' => 2,
//            'active' => true,
//        ]);
//
//
//        $group = Group::create([
//            'name' => 'Пятая группа',
//            'course_id' => 3,
//            'active' => false,
//        ]);

    }
}

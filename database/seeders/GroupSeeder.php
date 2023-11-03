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
            'name' => 'Javascript group',
            'group_num' => 1,
            'course_id' => 1,
            'active' => true,
        ]);

        // добавляем юзеров в текущаю группу
        $group->users()->attach([2, 3]);


        $group = Group::create([
            'name' => 'Javascript group',
            'group_num' => 2,
            'course_id' => 1,
            'active' => true,
        ]);

        $group->users()->attach([4]);

        $group = Group::create([
            'name' => 'React group',
            'group_num' => 1,
            'course_id' => 2,
            'active' => true,
        ]);

        $group->users()->attach([5]);

        $group = Group::create([
            'name' => 'React group',
            'group_num' => 2,
            'course_id' => 2,
            'active' => true,
        ]);

        $group->users()->attach([6]);

        $group = Group::create([
            'name' => 'Vue group',
            'group_num' => 1,
            'course_id' => 3,
            'active' => false,
        ]);

    }
}

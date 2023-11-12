<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(Request $request)
    {
        if($request->id) {
            $groups = Group::where('id', $request->id)->get();
        } else {
            $groups = Group::all();
        }
        return response()->json($groups);
    }

    public function getGroupsByCourseId(Request $request)
    {
        if($request->course_id) {
            $groups = Group::where('course_id', $request->course_id)->get();
        } else {
            $groups = Group::all();
        }
        return response()->json($groups);
    }

    public function store(Request $request): JsonResponse
    {
        // $validate = $request->validate([
        //     'name' => ['required'],
        //     'group_num' => ['required', 'unique:groups'],
        // ], [
        //     'name.required' => 'Введите имя',
        //     'group_num.required' => 'Введите номер группы',
        //     'group_num.unique' => 'Такая группа уже существует',
        // ]);
      
        $group = Group::create([
            'name' => $request->name,
            'group_num' => $request->group_num,
            'course_id' => $request->course_id,
        ]);
//dd($request->users_id);
$parts = explode(',', $request->users_id);
        $group =  $group->users()->attach($parts);

        return response()->json(['status' => 200, 'data' => $group]);;
    }

    public function show(Group $group)
    {
        return response()->json($group);
    }

    public function update(Request $request, Group $group): JsonResponse
    {
        $group->update($request->all());

        return response()->json($group);
    }

    public function destroy(Group $group): JsonResponse
    {
        $group->delete();

        return response()->json(['status' => 200, 'message' => 'Deleted']);
    }

    public function restore(int $id): JsonResponse
    {
        Group::withTrashed()->where('id', $id)->restore();

        return response()->json(['status' => 200, 'message' => 'Restored']);
    }

    public function getUsers(Group $group): JsonResponse
    {
        $users = $group->users;

        return response()->json($users ?
            ['status' => 200, 'data' => $users] :
            ['status' => 200, 'data' => []]);
    }

    public function getLessons(Group $group): JsonResponse
    {
        $lessons = $group->lessons;

        return response()->json($lessons ?
            ['status' => 200, 'data' => $lessons] :
            ['status' => 200, 'data' => []]);
    }

}

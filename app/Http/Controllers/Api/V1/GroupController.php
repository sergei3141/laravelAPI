<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(Request $request)
    {
        if($request->based_on) {
            $groups = Group::where('based_on', $request->based_on)->get();
        } else {
            $groups = Group::all();
        }

        return response()->json($groups);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'unique:groups'],
            'based_on' => ['required']
        ]);

        if ($validate) {
            $group = Group::create([
                'name' => $request->name,
                'based_on' => $request->based_on,
                'students_id' => json_encode($request->students_id),
            ]);

            return response()->json($group);
        }

    }

    public function show(Group $group)
    {
        return response()->json($group);
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return response()->json(['status' => 200]);
    }

    public function restore(int $id)
    {
//        Group::withTrashed()->restore();

        Group::withTrashed()->where('id', $id)->restore();

        return response()->json(['status' => 200]);
    }

    public function update(Request $request, Group $group)
    {
        dd($request->all());
        $group->update($request->all());

        return response()->json($group);
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public static function index(Request $params)       //Filter by 2 param-s
    {
        $query = Lesson::query();
        if (isset($params['group'])) {
            $query->where('group', $params->group);
        }

        return $query->get();
    }

    public function store(Request $request)
    {   
        $lesson = Lesson::create($request->all());
        return response()->json($lesson);
    }

    public function update(Request $request)
    {
        $lesson = Lesson::create($request->all());
        return response()->json($lesson);
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return response()->json(['status'=>200]);
    }
}

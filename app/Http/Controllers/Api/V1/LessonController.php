<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Theme;
use App\Models\User;
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




    public function store(Request $request )
    {   
    $price = Group::where('id', $request->group_id)->pluck('price')->first();      //Узнаём цену всего курса
    $base = Group::where('id', $request->group_id)->pluck('course_id')->first();   //Узнаём на каком курсе базируется, чтобы узнать кол-во запланированных урококв
    $count = Theme::where('course_id', $base)->count();
    $pricePerLesson = $price / $count;





    $userIds = explode(',', $request->studentsIdInGroup);

    foreach ($userIds as $userId) {
        User::where('id', $userId)->increment('balance', -$pricePerLesson);
    }


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

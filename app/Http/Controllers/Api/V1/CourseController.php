<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return response()->json(['status' => 200, 'data' => $courses]);
    }
    public function getThemes(Course $course)
    {
        $themes = $course->themes;

        return response()->json(['status' => 200, 'data' => $themes]);
    }


}

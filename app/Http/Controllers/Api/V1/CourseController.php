<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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

    public function show(Course $course): JsonResponse
    {
        return response()->json($course);
    }

    public function store(Request $request): JsonResponse
    {   
        $course = Course::create($request->all());   /*->validated()*/
        
        return response()->json(['status' => 200, 'data' => $course]);
    }

    public function update(Course $course, Request $request): JsonResponse
    {
        $course->update($request->all());
        return response()->json(['status' => 200, 'data' => $course]);
    }

    public function destroy(Course $course): JsonResponse
    {
        $course->delete();

        return response()->json(['success' => true, 'status' => 200]);
    }


}

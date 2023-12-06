<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ExerciseController extends Controller
{
    public function index()
    {
        $table = Exercise::all();
        return response()->json(['status' => 200, 'data' => $table]);
    }

    public function show(Exercise $exercise)
    {
        return response()->json($exercise);
    }

    public function store(Request $request)
    {   
        $exercise = Exercise::create($request->all());
        return response()->json($exercise);
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return response()->json(['status'=>200]);
    }

    public function update(Exercise $exercise, Request $request): JsonResponse
    {
        $exercise ->update($request->all());
        return response()->json(['status' => 200, 'data' => $exercise]);
    }

}

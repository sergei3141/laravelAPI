<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::all();

        return response()->json(['status' => 200, 'data' => $themes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Theme::create($data);

        return response()->json(['status' => 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Theme $theme)
    {
        $theme->update($request->all());
        return response()->json(['status' => 200, 'data' => $theme]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();

        return response()->json(['success' => true, 'status' => 200]);
    }

    public function getCourse(Theme $theme)
    {
        $course = $theme->course;

        return response()->json(['status' => 200, 'data' => $course]);


    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Contantmap;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContantmapController extends Controller
{
    public function index()
    {
        $contantmap = Contantmap::all();
        return response()->json(['status' => 200, 'data' => $contantmap]);
    }

    public function update(Contantmap $contantmap, Request $request): JsonResponse
    {
        $contantmap->update($request->all());
        return response()->json(['status' => 200, 'data' => $contantmap]);
    }

}

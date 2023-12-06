<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TableController extends Controller
{
    public function index()
    {
        $table = Table::all();
        
        return response()->json(['status' => 200, 'data' => $table]);
    }

    public function store(Request $request)
    {   
        $table = Table::create($request->all());
        return response()->json($table);
    }

    public function destroy(Table $table)
    {
        $table->delete();
        return response()->json(['status'=>200]);
    }

    public function update(Table $table, Request $request): JsonResponse
    {
        $table->update($request->all());
        return response()->json(['status' => 200, 'data' => $table]);
    }

}

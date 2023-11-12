<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

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

}

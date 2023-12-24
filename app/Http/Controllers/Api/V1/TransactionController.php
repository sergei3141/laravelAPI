<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(): JsonResponse
    {
        $perPage = request()->input('perPage');
    
        $transactions = Transaction::query();

    
        // Получаем общее количество 
        $totalCount = $transactions->count();
    
        // Применяем пагинацию
        $transactions = $transactions->paginate($perPage ?: 2000);
    
        return response()->json([
            'data' => $transactions->items(),
            'totalCount' => $totalCount,
            'currentPage' => $transactions->currentPage(),
            'lastPage' => $transactions->lastPage()
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['ip'] = $request->ip(); // получение IP-адреса пользователя
        Transaction::create($data);
        return response()->json(['status' => 200]);
    }
}
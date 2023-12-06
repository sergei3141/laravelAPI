<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\Paginator;

class ClientController extends Controller
{public function index(Request $request)
    {
        $perPage = $request->query('perPage', 40); // Use query parameter 'perPage' if provided, else default to 50
    
        $clients = Client::latest()->paginate($perPage);
    
        $currentPage = $request->query('page', 1); // Get the page number from the query parameter 'page', default to 1
    
        $clients->appends(['perPage' => $perPage, 'page' => $currentPage]); // Append the query parameters to the pagination links
    
        return response()->json([
            'data' => $clients->items(),
            'currentPage' => $clients->currentPage(),
            'lastPage' => $clients->lastPage()
        ]);
    }

    public function store(Request $request)
    {   
        $client = Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'ip' => $request->getClientIp(),
        ]);


        return response()->json(['status' => 200, 'data' => $client]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json(['status'=>200]);
    }

}

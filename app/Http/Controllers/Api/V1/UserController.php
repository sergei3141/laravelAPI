<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserApiRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::paginate(1000);

        return response()->json([
            'data' => $users->all(),
            'currentPage' => $users->currentPage(),
            'lastPage' => $users->lastPage()
        ]);
    }

    public function store(Request $request): JsonResponse
    {   
        $user = User::create($request->all());   /*->validated()*/
        
        return response()->json(['status' => 200, 'data' => $user]);
    }

    public function show(User $user): JsonResponse
    {
        return response()->json($user);
    }

    public function update(User $user, Request $request): JsonResponse
    {
        $user->update($request->all());
        return response()->json(['status' => 200, 'data' => $user]);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json(['success' => true, 'status' => 200]);
    }

    public function getGroups(User $user): JsonResponse
    {
        $groups = $user->groups;

        return response()->json($groups ?
            ['status' => 200, 'data' => $groups] :
            ['status' => 200, 'data' => []]);
    }

    public function updateTask(User $user, Request $request): JsonResponse
    {  
        $user->update($request->only('tasks_completed'));
        return response()->json($user);
    }
}

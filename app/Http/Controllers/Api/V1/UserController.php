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
        $users = User::paginate(10);

        return response()->json([
            'data' => $users->all(),
            'currentPage' => $users->currentPage(),
            'lastPage' => $users->lastPage()
        ]);
    }

    public function store(UserApiRequest $userApiRequest): JsonResponse
    {
        $user = User::create($userApiRequest->validated());

        return response()->json($user);
    }

    public function show(User $user): JsonResponse
    {
        return response()->json($user);
    }

    public function update(User $user, Request $request): JsonResponse
    {
        $user->update($request->all());

        return response()->json($user);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json(['success' => true, 'status' => 200]);
    }
}

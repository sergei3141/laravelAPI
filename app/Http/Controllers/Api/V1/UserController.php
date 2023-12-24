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
        $active = request()->input('active');
        $perPage = request()->input('perPage');
        $users = User::paginate($perPage ?: 2000);

        if ($active == 1){
        $activeUsers = $users->filter(function ($user) {
            return $user['active'];
            });
        }else{
        $activeUsers = $users->filter(function ($user) {
            return $user;
            });
        };

        $subset = $activeUsers->map(function ($usr) {
            return collect($usr->toArray())
                ->only(['id', 'name', 'role', 'tasks_completed'])
                ->all();
        });

        return response()->json([
            'data' => $subset,
            'currentPage' => $users->currentPage(),
            'lastPage' => $users->lastPage()
        ]);
    }


    // public function adminIndex(): JsonResponse
    // {
    // $active = request()->input('active');
    // $sort = request()->input('sort');
    // $perPage = request()->input('perPage');
    // $users = User::paginate($perPage ?: 2000);

    // if ($active == 1){
    //     $activeUsers = $users->filter(function ($user) {
    //         return $user['active'];
    //     });
    // }else{
    //     $activeUsers = $users->filter(function ($user) {
    //         return $user;
    //     });
    // }

    // if ($sort == 'asc') {
    //     $sortedUsers = $activeUsers->sortBy('balance');
    // } elseif ($sort == 'desc') {
    //     $sortedUsers = $activeUsers->sortByDesc('balance');
    // } else {
    //     $sortedUsers = $activeUsers;
    // }
    //     return response()->json([
    //         'data' => $sortedUsers,
    //         'currentPage' => $users->currentPage(),
    //         'lastPage' => $users->lastPage()
    //     ]);
    // }

    public function adminIndex(): JsonResponse
    {
        $active = request()->input('active');
        $sort = request()->input('sort');
        $perPage = request()->input('perPage');
    
        $users = User::query();
    
        if ($active == 1) {
            $users->where('active', true);
        }
    
        if ($sort == 'asc') {
            $users->orderBy('balance', 'asc');
        } elseif ($sort == 'desc') {
            $users->orderBy('balance', 'desc');
        }
    
        // Получаем общее количество пользователей
        $totalCount = $users->count();
    
        // Применяем пагинацию
        $users = $users->paginate($perPage ?: 2000);
    
        return response()->json([
            'data' => $users->items(),
            'totalCount' => $totalCount,
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
        $subset = $user->only(['id', 'name', 'role', 'tasks_completed']);
        return response()->json($subset);
    }

    public function adminShow(User $user): JsonResponse
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

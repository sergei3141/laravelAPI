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
        $users = User::paginate(1000);

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

    public function adminIndex(): JsonResponse
    {
        $active = request()->input('active');
        $users = User::paginate(1000);

        if ($active == 1){
        $activeUsers = $users->filter(function ($user) {
            return $user['active'];
            });
        }else{
        $activeUsers = $users->filter(function ($user) {
            return $user;
            });
        };


        return response()->json([
            'data' => $activeUsers,
            'currentPage' => $users->currentPage(),
            'lastPage' => $users->lastPage()
        ]);
    }

//     public function index(User $user)
// {
//     $this->user = $user;

//     foreach ($this->filters() as $name => $value) {
//         if (method_exists($this, $name)) {
//             call_user_func_array([$this, $name], array_filter([$value]));
//         }
//     }

//     return $this->$user;
// }

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

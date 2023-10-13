<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;


class JwtMiddleware
{
    public function handle($request, Closure $next, ...$roles): mixed
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            return response()->json(['status' => 401, 'error' => $e->getMessage()], 401);
        }

        if (isset($user->role) && in_array($user->role, $roles)) {
            return $next($request);
        }

         return response()->json(['status' => 403, 'error' => "You don't have permission"]);
    }
}

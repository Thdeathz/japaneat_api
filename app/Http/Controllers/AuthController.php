<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\User;
use Faker\Core\Number;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only(['email', 'password']);

        $user = User::query()->where('email', '=', $request->get('email'))->first();

        if (!$token = auth()->setTTL(60 * 24)->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $achievements = array_map( function ($each) {
            $achievement = Achievement::query()
                                ->where('id', '=', $each)
                                ->first();
            if($achievement) return $achievement;
            return null;
        }, explode(',', $user->achievement ));

        return response()->json([
            'message' => 'Login Successfully',
            'user' => $user,
            'achievements' => $achievements,
            'token' => $token,
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->setTTL(60 * 24)->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the token array structure.
     *
     * @param $id
     * @return JsonResponse
     */
    protected function getCurrentPoint($id): JsonResponse
    {
        $user = User::query()->where('id', '=', $id)->first();

        $point = (int)$user->total_point - (int)$user->used_point;

        return response()->json([
            'point' => $point,
            'message'      => 'Get current point successfully'
        ]);
    }

    /**
     * Use point.
     *
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    protected function usePoint(Request $request, $id): JsonResponse
    {
        $user = User::query()->where('id', '=', $id)->first();
        $user->used_point += (int)$request->get('used_point');
        $point = (int)$user->total_point - (int)$user->used_point;
        if($user->achievement) {
            $user->achievement = $user->achievement . ',' . $request->get('achievement_id');
        } else {
            $user->achievement = `{$request->get('achievement_id')}`;
        }
        $user->save();

        return response()->json([
            'point'        =>  $point,
            'message'      => 'Get current point successfully'
        ]);
    }

    /**
     * Get current achievement
     *
     * @param $id
     * @return JsonResponse
     */
    protected function getAchievements($id): JsonResponse
    {
        $user = User::query()->where('id', '=', $id)->first();

        $achievements = array_map( function ($each) {
            $achievement = Achievement::query()
                ->where('id', '=', $each)
                ->first();
            if($achievement) return $achievement;
            return null;
        }, explode(',', $user->achievement ));

        return response()->json([
            'data' => $achievements,
            'message' => 'Get achievement successfully',
        ]);
    }
}

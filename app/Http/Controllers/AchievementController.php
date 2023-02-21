<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Http\Requests\StoreAchievementRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $achievements = Achievement::all();

        return response()->json([
            'data' => $achievements,
            'message' => 'Get video successfully'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAchievementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAchievementRequest $request)
    {
        //
    }

    public function getUserRanking(): JsonResponse
    {
        $users = User::query()
            ->select('id', 'name', 'total_point')
            ->where('role', '=', '1')
            ->orderBy('total_point', 'desc')
            ->get();

        return response()->json([
            'data' => $users,
            'message' => 'Get ranking successfully'
        ], 200);
    }
}

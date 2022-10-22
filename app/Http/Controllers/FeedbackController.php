<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use Illuminate\Http\JsonResponse;

class FeedbackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFeedbackRequest $request
     * @return JsonResponse
     */
    public function store(StoreFeedbackRequest $request): JsonResponse
    {
        if($request->validated()) {
            Feedback::query()->create($request->validated());
            return response()->json([
                'message' => 'Add feedback successfully'
            ], 200);
        }

        return response()->json([
            'message' => 'Add feedback failed'
        ], 400);
    }
}

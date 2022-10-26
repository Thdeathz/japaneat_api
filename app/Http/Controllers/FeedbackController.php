<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\RecordDetail;
use App\Models\User;
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
            $record = RecordDetail::query()->where('id', '=', $request->get('record_detail_id'))->first();

            $offer = $record->offer;
            $offer['total_point'] = (int)$offer->total_point + (int)$request->get('bonus_point');
            $offer->save();

            $answer = $record->answer;
            $answer['total_point'] = (int)$answer->total_point + (int)$request->get('bonus_point');
            $answer->save();

            return response()->json([
                'offer' => $offer,
                'answer' => $answer,
                'message' => 'Add feedback successfully'
            ], 200);
        }

        return response()->json([
            'message' => 'Add feedback failed'
        ], 400);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\VideoDetail;
use App\Http\Requests\StoreVideoDetailRequest;
use App\Models\Videos;
use Illuminate\Http\JsonResponse;

class VideoDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $videos = VideoDetail::all();

        return $this->respond($videos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVideoDetailRequest $request
     * @return JsonResponse
     */
    public function store(StoreVideoDetailRequest $request): JsonResponse
    {
        if($request->validated()) {
            $video = Videos::query()->create([
                'url'       => $request->get('url'),
                'thumbnail' => $request->get('thumbnail')
            ]);
            $video_detail = $request->validated();
            $video_detail['video_id'] = $video->id;
            VideoDetail::query()->create($video_detail);
            return response()->json([
                'message' => 'Add video successfully'
            ], 200);
        }

        return response()->json([
            'message' => 'Add video failed'
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param $video_detail_id
     * @return JsonResponse
     */
    public function show($video_detail_id): JsonResponse
    {
        $video = VideoDetail::query()->where('id', '=', $video_detail_id)->get();

        return $this->respond($video);
    }

    /**
     * Get the token array structure.
     *
     * @param object $videos
     * @return JsonResponse
     */
    protected function respond(object $videos): JsonResponse
    {
        $videos = $videos->map(function ($video) {
            $video_inf = $video->video;
            $teacher_inf = $video->teacher;
            $category_inf = $video->category;
            return [
                'id'            => $video->id,
                'video'         => [
                    'url'       => $video_inf->url,
                    'thumbnail' => $video_inf->thumbnail
                ],
                'teacher'       => $teacher_inf->name,
                'category'      => $category_inf->category_name,
                'title'         => $video->title,
                'description'   => $video->description,
            ];
        });

        return response()->json([
            'data' => $videos,
            'message' => 'Get video successfully'
        ], 200);
    }
}

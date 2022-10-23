<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\RecordDetail;
use App\Http\Requests\StoreRecordDetailRequest;
use App\Http\Requests\UpdateRecordDetailRequest;
use App\Models\Videos;
use Illuminate\Http\JsonResponse;

class RecordDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $videos = RecordDetail::all();

        return $this->respond($videos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRecordDetailRequest $request
     * @return JsonResponse
     */
    public function store(StoreRecordDetailRequest $request): JsonResponse
    {
        if($request->validated()) {
            $record = Videos::query()->create([
                'url'       => $request->get('url'),
                'thumbnail' => $request->get('thumbnail')
            ]);
            $record_detail = $request->validated();
            $record_detail['record_id'] = $record->id;
            RecordDetail::query()->create($record_detail);
            return response()->json([
                'message' => 'Add record successfully'
            ], 200);
        }

        return response()->json([
            'message' => 'Add record failed'
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  $record_id
     * @return \Illuminate\Http\Response
     */
    public function show($record_id)
    {
        $video = RecordDetail::query()->where('id', '=', $record_id)->get();

        return $this->respond($video);
    }

    /**
     * Return record by teacher id
     *
     * @param  $teacher_id
     * @return \Illuminate\Http\Response
     */
    public function getRecordByTeacherId($teacher_id)
    {
        $record = RecordDetail::query()
            ->select('record_details.*')
            ->join('video_details', 'record_details.video_detail_id', 'video_details.id')
            ->where('video_details.teacher_id', '=', $teacher_id)->get();
        if($record) {
            return $this->respond($record);
        }
        return response()->json([
            'message' => 'Record not found'
        ], 400);
    }

    /**
     * Return record by teacher id
     *
     * @param  $student_id
     * @return \Illuminate\Http\Response
     */
    public function getRecordByStudentId($student_id)
    {
        $records = RecordDetail::query()
            ->where('offer_id', '=', $student_id)
            ->orWhere('answer_id', '=', $student_id)
            ->get();
        if($records) {
            return $this->respond($records);
        }
        return response()->json([
            'message' => 'Record not found'
        ], 400);
    }

    /**
     * Get the token array structure.
     *
     * @param object $records
     * @return JsonResponse
     */
    protected function respond(object $records): JsonResponse
    {
        $records = $records->map(function ($record) {
            $record_inf = $record->record;
            $video_inf = $record->video_detail;
            $offer_inf = $record->offer;
            $answer_inf = $record->answer;
            $feedback = $record->feedback;
            return [
                'id'            => $record->id,
                'record'         => [
                    'url'       => $record_inf->url,
                    'thumbnail' => $record_inf->thumbnail
                ],
                'teacher'       => $video_inf->teacher->name,
                'feedback'      => $feedback,
                'offer'         => $offer_inf->name,
                'answer'        => $answer_inf->name,
            ];
        });

        return response()->json([
            'data' => $records,
            'message' => 'Get video successfully'
        ], 200);
    }
}

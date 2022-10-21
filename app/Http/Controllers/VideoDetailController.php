<?php

namespace App\Http\Controllers;

use App\Models\VideoDetail;
use App\Http\Requests\StoreVideoDetailRequest;
use App\Http\Requests\UpdateVideoDetailRequest;

class VideoDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoDetail  $videoDetail
     * @return \Illuminate\Http\Response
     */
    public function show(VideoDetail $videoDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoDetail  $videoDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoDetail $videoDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoDetailRequest  $request
     * @param  \App\Models\VideoDetail  $videoDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoDetailRequest $request, VideoDetail $videoDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoDetail  $videoDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoDetail $videoDetail)
    {
        //
    }
}

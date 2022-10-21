<?php

namespace App\Http\Controllers;

use App\Models\RecordDetail;
use App\Http\Requests\StoreRecordDetailRequest;
use App\Http\Requests\UpdateRecordDetailRequest;

class RecordDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreRecordDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecordDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecordDetail  $recordDetail
     * @return \Illuminate\Http\Response
     */
    public function show(RecordDetail $recordDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecordDetail  $recordDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(RecordDetail $recordDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecordDetailRequest  $request
     * @param  \App\Models\RecordDetail  $recordDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecordDetailRequest $request, RecordDetail $recordDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecordDetail  $recordDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecordDetail $recordDetail)
    {
        //
    }
}

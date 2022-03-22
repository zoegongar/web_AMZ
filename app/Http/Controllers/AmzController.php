<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreamzRequest;
use App\Http\Requests\UpdateamzRequest;
use App\Models\amz;

class AmzController extends Controller
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
     * @param  \App\Http\Requests\StoreamzRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreamzRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\amz  $amz
     * @return \Illuminate\Http\Response
     */
    public function show(amz $amz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\amz  $amz
     * @return \Illuminate\Http\Response
     */
    public function edit(amz $amz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateamzRequest  $request
     * @param  \App\Models\amz  $amz
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateamzRequest $request, amz $amz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\amz  $amz
     * @return \Illuminate\Http\Response
     */
    public function destroy(amz $amz)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Restoran;
use App\Http\Requests\StoreRestoranRequest;
use App\Http\Requests\UpdateRestoranRequest;

class RestoranController extends Controller
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
     * @param  \App\Http\Requests\StoreRestoranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestoranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function show(Restoran $restoran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function edit(Restoran $restoran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestoranRequest  $request
     * @param  \App\Models\Restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestoranRequest $request, Restoran $restoran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restoran $restoran)
    {
        //
    }
}

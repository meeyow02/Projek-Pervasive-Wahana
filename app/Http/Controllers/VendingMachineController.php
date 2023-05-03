<?php

namespace App\Http\Controllers;

use App\Models\VendingMachine;
use App\Http\Requests\StoreVendingMachineRequest;
use App\Http\Requests\UpdateVendingMachineRequest;

class VendingMachineController extends Controller
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
     * @param  \App\Http\Requests\StoreVendingMachineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendingMachineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VendingMachine  $vendingMachine
     * @return \Illuminate\Http\Response
     */
    public function show(VendingMachine $vendingMachine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VendingMachine  $vendingMachine
     * @return \Illuminate\Http\Response
     */
    public function edit(VendingMachine $vendingMachine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVendingMachineRequest  $request
     * @param  \App\Models\VendingMachine  $vendingMachine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendingMachineRequest $request, VendingMachine $vendingMachine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VendingMachine  $vendingMachine
     * @return \Illuminate\Http\Response
     */
    public function destroy(VendingMachine $vendingMachine)
    {
        //
    }
}

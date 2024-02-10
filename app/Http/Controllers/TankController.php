<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTankRequest;
use App\Http\Requests\UpdateTankRequest;
use App\Models\Tank;

class TankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tank $tank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tank $tank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTankRequest $request, Tank $tank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tank $tank)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use App\Http\Resources\MunicipalityCollection;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipalities = Municipality::all();
        return new MunicipalityCollection($municipalities);
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
    public function store(StoreMunicipalityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipality $municipality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipality $municipality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMunicipalityRequest $request, Municipality $municipality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipality $municipality)
    {
        //
    }
}

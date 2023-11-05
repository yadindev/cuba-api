<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use App\Http\Resources\MunicipalityCollection;
use App\Http\Resources\MunicipalityResource;

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
     * Display the specified resource.
     */
    public function show(Municipality $municipality)
    {
        return new MunicipalityResource($municipality);
    }

}

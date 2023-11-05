<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Http\Resources\ProvinceCollection;
use App\Http\Resources\ProvinceResource;
use App\Http\Resources\ProvincesCollection;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::all();
        return new ProvincesCollection($provinces);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        return new ProvinceResource($province);
    }
}

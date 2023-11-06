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
    public function show($id)
    {
        $municipality = Municipality::find($id);
        if (!$municipality) {
            return response()->json(
                [
                    'data' => [
                        'msg' => "El municipio con el identificador $id no existe"
                    ]
                ],
                404
            );
        }
        return new MunicipalityResource($municipality);
    }
}

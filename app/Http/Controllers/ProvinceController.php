<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Http\Resources\ProvinceCollection;
use App\Http\Resources\ProvinceResource;
use App\Http\Resources\ProvincesCollection;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::all();
        // return new ProvincesCollection($provinces);
        return response()->json($provinces);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $province = Province::find($id);
        if (!$province) {
            return response()->json(
                [
                    'data' => [
                        'msg' => "La provincia con el identificador $id no existe"
                    ]
                ],
                404
            );
        }

        return new ProvinceResource($province);
    }

    public function all()
    {
        $provinces = Province::all();
        return new ProvinceCollection($provinces);
    }
}

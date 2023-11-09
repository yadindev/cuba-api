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
     * Mostrar Provincias
     * 
     * Muestra solo las provincias con sus datos , exceptuando su relacion con sus municipios
     * 
     * 
     */
    public function index()
    {
        $provinces = Province::all();
        return new ProvincesCollection($provinces);
        // return response()->json($provinces);
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

    /**
     * Mostrar provincias y municipios.
     * 
     * Muestra todos los datos de la api, es decir las provincias con sus datos y todos los 
     * municipios asociados a ellas con sus datos
     */
    public function all()
    {
        $provinces = Province::all();
        return new ProvinceCollection($provinces);
    }
}

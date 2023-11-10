<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use App\Http\Resources\MunicipalityCollection;
use App\Http\Resources\MunicipalityResource;

/**
 * @OA\Tag(
 *     name="Municipios",
 *     description="Datos de los municipios"
 * )
 */
class MunicipalityController extends Controller
{
    /**
     * Obtener  municipios
     * 
     * Obtiene todos los datos de todos los municipios
     * @OA\Get (
     *     path="/municipios",
     *     tags={"Municipios"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="data",
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(property="id_municipio",type="number",example="1"),
     *                      @OA\Property(property="nombre_municipio",type="string",example="Alquizar"),
     *                      @OA\Property(property="es_cabecera_provincial",type="boolean",example="false"),
     *                  ) 
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $municipalities = Municipality::all();
        return new MunicipalityCollection($municipalities);
    }


    /**
     * Obtener Municipio
     * 
     * Obtiene todos los datos de un municipio
     * @OA\Get (
     *     path="/municipios/{id}",
     *     tags={"Municipios"},
     *    @OA\Parameter(
     *         name="id",
     *         required=true,
     *         in="path",
     *         description="El id del municipio",
     *         @OA\Schema(
     *             type="integer",
     *             format="int64",
     *             minimum=1,
     *             maximum=165,
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="object",
     *                 property="data",
     *                 
     *                       
     *                       @OA\Property(property="id_municipio",type="number",example="1"),
     *                       @OA\Property(property="nombre_municipio",type="string",example="Alquizar"),
     *                       @OA\Property(property="es_cabecera_provincial",type="boolean",example="false"),
     *                         )
     *                    
     *             )
     *         )
     *     ),
     * *     @OA\Response(
     *         response=404,
     *         description="Not Found",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="data",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="msg",
     *                         type="string",
     *                         example="La provincia con ese id no existe"
     *                     ),
     *                 )
     *             )
     *         )
     *     )
     * )
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

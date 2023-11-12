<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProvinceCollection;
use App\Http\Resources\ProvinceResource;
use App\Http\Resources\ProvincesCollection;
use App\Models\Province;
use Ramsey\Uuid\Type\Integer;

/**
 * Provincias
 */
class ProvinceController extends Controller
{
    /**
     * Obtener todas las provincias
     *
     * Obtiene todos los datos de una provincia sin contar su relacion con los municipios
     *
     * @OA\Get (
     *     path="/provincias",
     *     tags={"Provincias"},
     *
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(
     *                 type="array",
     *                 property="data",
     *
     *                 @OA\Items(
     *                     type="object",
     *
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre",
     *                         type="string",
     *                         example="Artemisa"
     *                     ),
     *                     @OA\Property(
     *                         property="acronimo",
     *                         type="string",
     *                         example="ART"
     *                     ),
     *                     @OA\Property(
     *                         property="es_capital",
     *                         type="boolean",
     *                         example="false"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $provinces = Province::all();

        return new ProvincesCollection($provinces);
    }

    /**
     * Obtener Provincia
     *
     * Obtiene todos los datos de todas las provincias con su relacion con los municipios y sus datos
     *
     * @OA\Get (
     *     path="/provincias/{id}",
     *     tags={"Provincias"},
     *
     *    @OA\Parameter(
     *         name="id",
     *         required=true,
     *         in="path",
     *         description="El id de la provincia",
     *
     *         @OA\Schema(
     *             type="integer",
     *             format="int64",
     *             minimum=1,
     *             maximum=16,
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(
     *                 type="array",
     *                 property="data",
     *
     *                 @OA\Items(
     *                     type="object",
     *
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre",
     *                         type="string",
     *                         example="Artemisa"
     *                     ),
     *                     @OA\Property(
     *                         property="acronimo",
     *                         type="string",
     *                         example="ART"
     *                     ),
     *                     @OA\Property(
     *                         property="es_capital",
     *                         type="boolean",
     *                         example="false"
     *                     ),
     *                     @OA\Property(
     *                         property="municipios",
     *                         type="array",
     *
     *                         @OA\Items(
     *                              type="object",
     *
     *                              @OA\Property(property="id_municipio",type="number",example="1"),
     *                              @OA\Property(property="nombre_municipio",type="string",example="Alquizar"),
     *                              @OA\Property(property="es_cabecera_provincial",type="boolean",example="false"),
     *                         )
     *                     ),
     *                 )
     *             )
     *         )
     *     ),
     */
    public function show(int $id)
    {

        $province = Province::find($id);
        if (! $province) {
            return response()->json(
                [
                    'data' => [
                        'msg' => "La provincia con el identificador $id no existe",
                    ],
                ],
                404
            );
        }

        return new ProvinceResource($province);
    }

    /**
     * Obtener todas las provincias y sus municipios
     *
     * Obtiene todos los datos de todas las provincias con su relacion con los municipios y sus datos
     *
     * @OA\Get (
     *     path="/provincias-municipios",
     *     tags={"Provincias"},
     *
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(
     *                 type="array",
     *                 property="data",
     *
     *                 @OA\Items(
     *                     type="object",
     *
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre",
     *                         type="string",
     *                         example="Artemisa"
     *                     ),
     *                     @OA\Property(
     *                         property="acronimo",
     *                         type="string",
     *                         example="ART"
     *                     ),
     *                     @OA\Property(
     *                         property="es_capital",
     *                         type="boolean",
     *                         example="false"
     *                     ),
     *                     @OA\Property(
     *                         property="municipios",
     *                         type="array",
     *
     *                         @OA\Items(
     *                              type="object",
     *
     *                              @OA\Property(property="id_municipio",type="number",example="1"),
     *                              @OA\Property(property="nombre_municipio",type="string",example="Alquizar"),
     *                              @OA\Property(property="es_cabecera_provincial",type="boolean",example="false"),
     *                         )
     *                     ),
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function all()
    {
        $provinces = Province::all();

        return new ProvinceCollection($provinces);
    }
}

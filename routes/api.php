<?php

use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Resources\ProvinceCollection;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
  Route::get('/provincias-municipios', [ProvinceController::class, 'all']);
  Route::apiResource('provincias', ProvinceController::class);
  Route::apiResource('municipios', MunicipalityController::class);
});

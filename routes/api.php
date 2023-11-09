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



Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
  /* Rutas de provincias */
  Route::get('/provincias-municipios', [ProvinceController::class, 'all']);
  Route::get('/provincias', [ProvinceController::class, 'index']);
  Route::get('/provincias/{idProvincia}', [ProvinceController::class, 'show']);

  /* Rutas de municipios */
  Route::get('/municipios', [MunicipalityController::class, 'index']);
  Route::get('/municipios/{idMunicipio}', [MunicipalityController::class, 'show']);

});

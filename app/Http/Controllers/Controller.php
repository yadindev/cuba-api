<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *             title="Cuba-api",
 *             version="1.0",
 *             description="Api para consultar la division administrativa de Cuba"
 * )
 *
 * @OA\Server(url="https://cuba-api.onrender.com/api/v1/")
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipalityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_municipio' => $this->id,
            'nombre_municipio' => $this->name,
            'es_cabecera_provincial' => $this->province_capital 
        ];
    }
}

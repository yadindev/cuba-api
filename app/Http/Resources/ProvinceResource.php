<?php

namespace App\Http\Resources;

use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->name,
            'acronimo' => $this->short_name,
            'es_capital' => $this->capital ? true : false,
            'municipios' => new MunicipalityCollection($this->municipalities)
        ];
    }
}

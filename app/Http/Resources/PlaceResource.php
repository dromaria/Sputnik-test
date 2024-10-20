<?php

namespace App\Http\Resources;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Place */
class PlaceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude
        ];
    }
}

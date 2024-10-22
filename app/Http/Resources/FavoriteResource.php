<?php

namespace App\Http\Resources;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Favorite */
class FavoriteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->place->name,
            'latitude' => $this->place->latitude,
            'longitude' => $this->place->longitude,
        ];
    }
}

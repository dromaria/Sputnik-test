<?php

namespace App\Http\Resources;

use App\Models\Favorite;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Favorite */
class FavoriteResource extends JsonResource
{
    public function toArray(Request $request): Place
    {
        return $this->place;
    }
}

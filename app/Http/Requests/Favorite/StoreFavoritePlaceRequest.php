<?php

namespace App\Http\Requests\Favorite;

use App\Http\Requests\BaseRequest;

class StoreFavoritePlaceRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'place_id' => ['exists:places,id'],
        ];
    }

    public function getPlaceId(){
        return $this->validated('place_id');
    }
}

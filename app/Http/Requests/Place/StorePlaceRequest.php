<?php

namespace App\Http\Requests\Place;

use App\Http\Requests\BaseRequest;

class StorePlaceRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'max:255', 'unique:places,name'],
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
        ];
    }

    public function getName()
    {
        return $this->validated('name');
    }

    public function getLatitude()
    {
        return $this->validated('latitude');
    }

    public function getLongitude()
    {
        return $this->validated('longitude');
    }
}

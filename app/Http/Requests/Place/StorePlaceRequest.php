<?php

namespace App\Http\Requests\Place;

use App\Http\Requests\Authorize\AuthorizeRequest;

class StorePlaceRequest extends AuthorizeRequest
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'max:255'],
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

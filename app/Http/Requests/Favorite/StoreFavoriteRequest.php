<?php

namespace App\Http\Requests\Favorite;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFavoriteRequest extends FormRequest
{
    public function rules(): array
    {
        $userId = $this->route('id');
        return [
            'place_id' => [
                'exists:places,id',
                Rule::unique('favorites')->where(function ($query) use ($userId) {
                    return $query->where('user_id', $userId);
            })],
        ];
    }

    public function getPlaceId(){
        return $this->validated('place_id');
    }
}

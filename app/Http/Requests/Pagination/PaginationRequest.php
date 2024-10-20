<?php

namespace App\Http\Requests\Pagination;

use App\Http\Requests\Authorize\AuthorizeRequest;

class PaginationRequest extends AuthorizeRequest
{
    public function rules(): array
    {
        return [
            'limit'=>['integer', 'gt:0'],
            'page'=>['integer', 'gt:0'],
        ];
    }

    public function getLimit(){
        return $this->validated('limit');
    }

    public function getPage(){
        return $this->validated('page');
    }
}

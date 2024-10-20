<?php

namespace App\Http\Controllers;

use App\Actions\IndexPlaceAction;
use App\Actions\StorePlaceAction;
use App\DTO\Pagination\PaginationDTO;
use App\DTO\Place\PlaceDTO;
use App\Http\Requests\Pagination\PaginationRequest;
use App\Http\Requests\Place\StorePlaceRequest;
use App\Http\Resources\PlaceResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlaceController extends Controller
{
    public function index(PaginationRequest $request, IndexPlaceAction $action): ResourceCollection
    {
        $dto = new PaginationDTO([
            'limit' => $request->getLimit(),
            'page' => $request->getPage(),
        ]);

        $places = $action->execute($dto);

        return PlaceResource::collection($places);
    }

    public function store(StorePlaceRequest $request, StorePlaceAction $action): PlaceResource
    {
        $dto = new PlaceDTO([
            'name' => $request->getName(),
            'latitude' => $request->getLatitude(),
            'longitude' => $request->getLongitude()
        ]);

        $place = $action->execute($dto);

        return new PlaceResource($place);
    }
}

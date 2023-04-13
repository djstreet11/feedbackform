<?php

namespace App\Http\Resources\ListCollections;

use App\Http\Resources\BaseListCollection;
use Illuminate\Support\Collection;

/**
 * Class CityListCollection
 *
 * @package App\Http\Resources\ListCollections
 */
class CityListCollection extends BaseListCollection
{
    /**
     * Specifies data item in response
     *
     * @return Collection
     */
    protected function data(): Collection
    {
        return $this->collection->transform(function ($city) {
            return [
                'id'        => $city->id,
                'naem'      => $city->name,
            ];
        });
    }
}

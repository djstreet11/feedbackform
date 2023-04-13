<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class CityRepository
 *
 * @package App\Repositories
 *
 */
class CityRepository extends BaseRepository
{
    /**
     * CityRepository constructor.
     *
     * @param City $city
     * @internal param City $city
     */
    public function __construct(City $city)
    {
        $this->model = $city;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'cities.id',
            'cities.name',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}

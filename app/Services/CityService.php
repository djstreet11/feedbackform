<?php

namespace App\Services;

use App\Models\City;
use App\Repositories\CityRepository;

/**
 * Class CityService
 *
 * @package App\Services
 */
class CityService
{
    /** @var CityRepository */
    private $cityRepository;

    public function __construct(CityRepository $cityRepository) {
        $this->cityRepository = $cityRepository;
    }

    /**
     * @param array $data
     *
     * @return City|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->cityRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param City $city
     * @param array $data
     * @return City|false
     */
    public function update(City $city, array $data)
    {
        $response = $this->cityRepository->update($city->id, $data);

        return $response
            ? $city->fresh()
            : false;
    }
}

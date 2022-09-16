<?php

declare(strict_types=1);

namespace Semai\Map;

use InvalidArgumentException;
use RuntimeException;
use GuzzleHttp\Exception\GuzzleException;
use Semai\Map\Repositories\{PlaceRepository,GeoCodeRepository};

/** @package Semai\Map */
class MapApi
{
    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function placeAutoComplete(array $params)
    {
        return (new PlaceRepository)->placeAutoComplete($params);
    }

    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function placeQueryAutoComplete(array $params)
    {
        return (new PlaceRepository)->placeQueryAutoComplete($params);
    }

    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function placeDetails(array $params)
    {
        return (new PlaceRepository)->placeDetails($params);
    }

    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function placeSearchFind(array $params)
    {
        return (new PlaceRepository)->placeSearchFind($params);
    }

    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function placeSearchNearby(array $params)
    {
        return (new PlaceRepository)->placeSearchNearby($params);
    }

    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function placeSearchText(array $params)
    {
        return (new PlaceRepository)->placeSearchText($params);
    }

    /**
     * @param array $params 
     * @return object 
     * @throws InvalidArgumentException 
     * @throws RuntimeException 
     * @throws GuzzleException 
     */
    public function geoCode(array $params)
    {
        return (new GeoCodeRepository)->geoCode($params);
    }
}

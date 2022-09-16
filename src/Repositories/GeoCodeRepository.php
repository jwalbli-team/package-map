<?php

declare(strict_types=1);

namespace Semai\Map\Repositories;

use InvalidArgumentException;
use RuntimeException;
use GuzzleHttp\Exception\GuzzleException;
use Semai\Map\{MapConfig, Requestor};

/** @package Semai\Map\Repositories */
class GeoCodeRepository
{
	/**
	 * @param array $params 
	 * @return object 
	 * @throws InvalidArgumentException 
	 * @throws RuntimeException 
	 * @throws GuzzleException 
	 */
	public function geoCode(array $params)
	{
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/geocode/json';

		$payload = [
			'headers' => [
				'User-Agent' => MapConfig::$userAgent,
				'X-Android-Cert' => MapConfig::$xAndroidCert,
				'X-Android-Package' => MapConfig::$xAndroidPackage
			],
			'query' => $params
		];

		$result = (new Requestor)->fetchData($endpoint, 'GET', $payload);

		return $result;
	}
}

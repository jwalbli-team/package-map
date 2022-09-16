<?php

declare(strict_types=1);

namespace Semai\Map\Repositories;

use InvalidArgumentException;
use RuntimeException;
use GuzzleHttp\Exception\GuzzleException;
use Semai\Map\{MapConfig, Requestor};

/** @package Semai\Map\Repositories */
class PlaceRepository
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
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/place/autocomplete/json';

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

	/**
	 * @param array $params 
	 * @return object 
	 * @throws InvalidArgumentException 
	 * @throws RuntimeException 
	 * @throws GuzzleException 
	 */
	public function placeQueryAutoComplete(array $params)
	{
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/place/queryautocomplete/json';

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

	/**
	 * @param array $params 
	 * @return object 
	 * @throws InvalidArgumentException 
	 * @throws RuntimeException 
	 * @throws GuzzleException 
	 */
	public function placeDetails(array $params)
	{
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/place/details/json';

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

	/**
	 * @param array $params 
	 * @return object 
	 * @throws InvalidArgumentException 
	 * @throws RuntimeException 
	 * @throws GuzzleException 
	 */
	public function placeSearchFind(array $params)
	{
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/place/findplacefromtext/json';

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

	/**
	 * @param array $params 
	 * @return object 
	 * @throws InvalidArgumentException 
	 * @throws RuntimeException 
	 * @throws GuzzleException 
	 */
	public function placeSearchNearby(array $params)
	{
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json';

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

	/**
	 * @param array $params 
	 * @return object 
	 * @throws InvalidArgumentException 
	 * @throws RuntimeException 
	 * @throws GuzzleException 
	 */
	public function placeSearchText(array $params)
	{
		$params['key'] = MapConfig::$apiKey;

		$endpoint = 'https://maps.googleapis.com/maps/api/place/textsearch/json';

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

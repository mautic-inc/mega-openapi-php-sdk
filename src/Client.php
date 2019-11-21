<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI;

use MauticInc\MEGA\OpenAPI\Endpoint\LocationInstanceBrowse;
use MauticInc\MEGA\OpenAPI\Endpoint\LocationRead;
use MauticInc\MEGA\OpenAPI\Generated\Client as BaseClient;

class Client extends BaseClient
{
    private $bearerToken;

    public function setBearerToken(string $token)
    {
        $this->bearerToken = $token;
    }

    /**
     * Get an location object.
     *
     * @param string $location UUID of the location to operate on
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadTooManyRequestsException
     *
     * @return \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseLocation|\Psr\Http\Message\ResponseInterface|null
     */
    public function locationRead(string $location, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new LocationRead($location);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * Fetch a list of instances on a location.
     *
     * @param string $location        UUID of the location to operate on
     * @param array  $queryParameters {
     *
     *     @var int $page Page to fetch
     *     @var int $limit Limit to fetch
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationInstanceBrowseUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationInstanceBrowseForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationInstanceBrowseNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationInstanceBrowseTooManyRequestsException
     *
     * @return \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseArrayOfInstances|\Psr\Http\Message\ResponseInterface|null
     */
    public function locationInstanceBrowse(string $location, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new LocationInstanceBrowse($location, $queryParameters);
        $endpoint->setBearerToken($this->bearerToken);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }
}
<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
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
        return $this->executePsr7Endpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\LocationRead($location), $fetch);
    }

    /**
     * Fetch a list of instances on anlocationt.
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
        return $this->executePsr7Endpoint(new \MauticInc\MEGA\OpenAPI\Generated\Endpoint\LocationInstanceBrowse($location, $queryParameters), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('http://mega.test/openapi');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\MauticInc\MEGA\OpenAPI\Generated\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}

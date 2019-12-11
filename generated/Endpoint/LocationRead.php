<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class LocationRead extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $location;

    /**
     * Get a location object.
     *
     * @param string $location UUID of the location to operate on
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{location}'], [$this->location], '/locations/{location}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadForbiddenException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadNotFoundException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadTooManyRequestsException
     *
     * @return \MauticInc\MEGA\OpenAPI\Generated\Model\ResponseLocation|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseLocation', 'json');
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthorized', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadNotFoundException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseNotFound', 'json'));
        }
        if (429 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\LocationReadTooManyRequestsException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseRateLimited', 'json'));
        }
    }
}

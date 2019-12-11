<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class InstanceReadTooManyRequestsException extends \RuntimeException implements ClientException
{
    private $responseRateLimited;

    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ResponseRateLimited $responseRateLimited)
    {
        parent::__construct('Operation rate limited.', 429);
        $this->responseRateLimited = $responseRateLimited;
    }

    public function getResponseRateLimited()
    {
        return $this->responseRateLimited;
    }
}

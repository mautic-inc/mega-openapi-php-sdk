<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class TooManyRequestsException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 429);
    }
}
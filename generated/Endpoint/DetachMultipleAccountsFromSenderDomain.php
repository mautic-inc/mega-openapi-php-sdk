<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Endpoint;

class DetachMultipleAccountsFromSenderDomain extends \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\BaseEndpoint implements \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\Endpoint
{
    protected $sender_domain;
    /**
     * 
     *
     * @param string $senderDomain 
     * @param null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutBody $requestBody 
     */
    public function __construct(string $senderDomain, ?\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutBody $requestBody = null)
    {
        $this->sender_domain = $senderDomain;
        $this->body = $requestBody;
    }
    use \MauticInc\MEGA\OpenAPI\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sender_domain}'), array($this->sender_domain), '/sender-domains/{sender_domain}/accounts/delete');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountsFromSenderDomainUnauthorizedException
     * @throws \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountsFromSenderDomainForbiddenException
     *
     * @return null|\MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsSenderDomainAccountsDeletePutResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomainsSenderDomainAccountsDeletePutResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountsFromSenderDomainUnauthorizedException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseUnauthenticated', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \MauticInc\MEGA\OpenAPI\Generated\Exception\DetachMultipleAccountsFromSenderDomainForbiddenException($serializer->deserialize($body, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\ResponseForbidden', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('OAuth2');
    }
}
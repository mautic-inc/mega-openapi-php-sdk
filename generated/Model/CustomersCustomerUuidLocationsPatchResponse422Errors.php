<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class CustomersCustomerUuidLocationsPatchResponse422Errors extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string[]|null
     */
    protected $locationUuid;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLocationUuid() : ?array
    {
        return $this->locationUuid;
    }
    /**
     * 
     *
     * @param string[]|null $locationUuid
     *
     * @return self
     */
    public function setLocationUuid(?array $locationUuid) : self
    {
        $this->initialized['locationUuid'] = true;
        $this->locationUuid = $locationUuid;
        return $this;
    }
}
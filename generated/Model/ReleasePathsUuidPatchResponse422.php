<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ReleasePathsUuidPatchResponse422 extends \ArrayObject
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
     * @var ReleasePathsUuidPatchResponse422Errors|null
     */
    protected $errors;
    /**
     * 
     *
     * @return ReleasePathsUuidPatchResponse422Errors|null
     */
    public function getErrors() : ?ReleasePathsUuidPatchResponse422Errors
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param ReleasePathsUuidPatchResponse422Errors|null $errors
     *
     * @return self
     */
    public function setErrors(?ReleasePathsUuidPatchResponse422Errors $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}
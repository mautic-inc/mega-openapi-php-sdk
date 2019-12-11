<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Instance';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Instance';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\Instance();
        if (property_exists($data, 'uuid') && $data->{'uuid'} !== null) {
            $object->setUuid($data->{'uuid'});
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $data->{'updated_at'}));
        }
        if (property_exists($data, 'active_at') && $data->{'active_at'} !== null) {
            $object->setActiveAt(\DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $data->{'active_at'}));
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'subdomain') && $data->{'subdomain'} !== null) {
            $object->setSubdomain($data->{'subdomain'});
        }
        if (property_exists($data, 'custom_domain') && $data->{'custom_domain'} !== null) {
            $object->setCustomDomain($data->{'custom_domain'});
        }
        if (property_exists($data, 'location_cname') && $data->{'location_cname'} !== null) {
            $object->setLocationCname($data->{'location_cname'});
        }
        if (property_exists($data, 'db_name') && $data->{'db_name'} !== null) {
            $object->setDbName($data->{'db_name'});
        }
        if (property_exists($data, 'db_host') && $data->{'db_host'} !== null) {
            $object->setDbHost($data->{'db_host'});
        }
        if (property_exists($data, 'plan_name') && $data->{'plan_name'} !== null) {
            $object->setPlanName($data->{'plan_name'});
        }
        if (property_exists($data, 'trial_expiration') && $data->{'trial_expiration'} !== null) {
            $object->setTrialExpiration(\DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $data->{'trial_expiration'}));
        }
        if (property_exists($data, 'user_email') && $data->{'user_email'} !== null) {
            $object->setUserEmail($data->{'user_email'});
        }
        if (property_exists($data, 'location_uuid') && $data->{'location_uuid'} !== null) {
            $object->setLocationUuid($data->{'location_uuid'});
        }
        if (property_exists($data, '_links') && $data->{'_links'} !== null) {
            $values = [];
            foreach ($data->{'_links'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\RelLink', 'json', $context);
            }
            $object->setLinks($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUuid()) {
            $data->{'uuid'} = $object->getUuid();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s\Z");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:s\Z");
        }
        if (null !== $object->getActiveAt()) {
            $data->{'active_at'} = $object->getActiveAt()->format("Y-m-d\TH:i:s\Z");
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getSubdomain()) {
            $data->{'subdomain'} = $object->getSubdomain();
        }
        if (null !== $object->getCustomDomain()) {
            $data->{'custom_domain'} = $object->getCustomDomain();
        }
        if (null !== $object->getLocationCname()) {
            $data->{'location_cname'} = $object->getLocationCname();
        }
        if (null !== $object->getDbName()) {
            $data->{'db_name'} = $object->getDbName();
        }
        if (null !== $object->getDbHost()) {
            $data->{'db_host'} = $object->getDbHost();
        }
        if (null !== $object->getPlanName()) {
            $data->{'plan_name'} = $object->getPlanName();
        }
        if (null !== $object->getTrialExpiration()) {
            $data->{'trial_expiration'} = $object->getTrialExpiration()->format("Y-m-d\TH:i:s\Z");
        }
        if (null !== $object->getUserEmail()) {
            $data->{'user_email'} = $object->getUserEmail();
        }
        if (null !== $object->getLocationUuid()) {
            $data->{'location_uuid'} = $object->getLocationUuid();
        }
        if (null !== $object->getLinks()) {
            $values = [];
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'_links'} = $values;
        }

        return $data;
    }
}

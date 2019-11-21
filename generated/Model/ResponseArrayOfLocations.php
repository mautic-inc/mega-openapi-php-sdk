<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseArrayOfLocations
{
    /**
     * @var Location[]|null
     */
    protected $data;
    /**
     * @var PaginationLinks|null
     */
    protected $links;
    /**
     * @var PaginationMeta|null
     */
    protected $meta;

    /**
     * @return Location[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param Location[]|null $data
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ?PaginationLinks
    {
        return $this->links;
    }

    public function setLinks(?PaginationLinks $links): self
    {
        $this->links = $links;

        return $this;
    }

    public function getMeta(): ?PaginationMeta
    {
        return $this->meta;
    }

    public function setMeta(?PaginationMeta $meta): self
    {
        $this->meta = $meta;

        return $this;
    }
}
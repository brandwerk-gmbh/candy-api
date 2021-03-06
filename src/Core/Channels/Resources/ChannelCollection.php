<?php

namespace GetCandy\Api\Core\Channels\Resources;

use GetCandy\Api\Http\Resources\AbstractCollection;

class ChannelCollection extends AbstractCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = ChannelResource::class;
}

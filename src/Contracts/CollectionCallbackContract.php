<?php

namespace InteractiveClient\ApiConsumer\Contracts;

use Illuminate\Support\Collection;

interface CollectionCallbackContract
{
    function applyTo(Collection &$collection) : Collection;
}

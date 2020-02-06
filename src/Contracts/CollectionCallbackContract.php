<?php

namespace InteractiveClient\ApiConsumer\Contracts;

use Illuminate\Support\Collection;

interface CollectionCallbackContract
{
    public function applyTo(Collection &$collection): Collection;
}

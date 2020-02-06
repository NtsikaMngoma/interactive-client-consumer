<?php

namespace InteractiveClient\ApiConsumer\CollectionCallbacks;

use Illuminate\Support\Collection;
use InteractiveClient\ApiConsumer\Support\BaseCollectionCallback;

class _ReflectionCollectionCallback extends BaseCollectionCallback
{
    /**
     * @var array
     */
    private $args;

    private $method;

    public function __construct()
    {
        $this->args = func_get_args();
    }

    /**
     * @param $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param Collection $collection
     * @return Collection
     * @throws \Exception
     */
    public function applyTo(Collection &$collection): Collection
    {
        $method = $this->method;
        if (! method_exists($collection, $method)) {
            throw new \Exception("Method {$method} does not exist.");
        }

        return $collection->$method(...$this->args);
    }
}

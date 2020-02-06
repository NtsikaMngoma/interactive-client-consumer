<?php

namespace InteractiveClient\ApiConsumer\Contracts;

interface ShapeContract
{
    public static function create($data);

    /*
    function isReturnShapeDataOnly(): bool;
    function isRequireShapeStructure(): bool;
    function getFields(): array;
    function getTransformations(): array;
    function set($key, $value);
    function validateStructure();
    */
}

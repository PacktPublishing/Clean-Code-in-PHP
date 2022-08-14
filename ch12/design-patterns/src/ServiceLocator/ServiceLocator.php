<?php

declare(strict_types=1);

namespace DesignPatterns\ServiceLocator;

class ServiceLocator
{
    public function get(string $class): object
    {
        // Object gets instantiated here

        return $object;
    }
}

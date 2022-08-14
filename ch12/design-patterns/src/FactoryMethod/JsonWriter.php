<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

class JsonWriter extends AbstractWriter
{
    public function createEncoder(): Encoder
    {
        return new JsonEncoder();
    }
}
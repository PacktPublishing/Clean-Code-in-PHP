<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

class CsvWriter extends AbstractWriter
{
    public function createEncoder(): Encoder
    {
        $encoder = new CsvEncoder();
        // here, more configuration work would take place
        // e.g. setting the delimiter
        return $encoder;
    }
}
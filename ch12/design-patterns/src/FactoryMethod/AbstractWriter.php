<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

abstract class AbstractWriter
{
    public function write(array $data): void
    {
        $encoder = $this->createEncoder();

        // Apply some filtering which should always happen,
        // regardless of the output format.
        array_walk(
            $data,
            function (&$value) {
                $value = str_replace('data', '', $value);
            }
        );

        // For demonstration purposes, we echo the result
        // here, instead of writing it into a file
        echo $encoder->encode($data);
    }

    abstract protected function createEncoder(): Encoder;
}
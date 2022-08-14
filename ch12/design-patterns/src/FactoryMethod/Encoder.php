<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

interface Encoder
{
    public function encode(array $data): string;
}
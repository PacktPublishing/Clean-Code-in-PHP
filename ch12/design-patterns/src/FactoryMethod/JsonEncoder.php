<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

class JsonEncoder implements Encoder
{
    public function encode(array $data): string
    {
        return json_encode($data);
    }
}
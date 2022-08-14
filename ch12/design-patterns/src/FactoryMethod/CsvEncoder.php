<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

class CsvEncoder implements Encoder
{
    public function encode(array $data): string
    {
        // fputcsv cannot write into a string, so we use
        // a stream wrapper here to first write it into
        // memory, and then from memory into string
        $f = fopen('php://memory', 'rb+');

        foreach ($data as $row) {
            fputcsv($f, $row);
        }

        rewind($f);

        return stream_get_contents($f);
    }
}
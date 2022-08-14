<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\FactoryMethod\AbstractWriter;
use DesignPatterns\FactoryMethod\CsvWriter;
use DesignPatterns\FactoryMethod\JsonWriter;

function factoryMethodExample(AbstractWriter $writer)
{
    $exampleData = [
        ['data3', 'data4'],
        ['data1', 'data2'],
    ];

    $writer->write($exampleData);

    echo PHP_EOL;
}

echo "Output using the CsvWriter:" . PHP_EOL;

factoryMethodExample(new CsvWriter());

echo "Output using the JsonWriter:" . PHP_EOL;

factoryMethodExample(new JsonWriter());
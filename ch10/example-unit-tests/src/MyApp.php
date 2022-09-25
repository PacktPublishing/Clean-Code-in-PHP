<?php

declare(strict_types=1);

namespace UnitTestsFailExample;

class MyApp
{
    public function __construct(
        private myRepository $myRepository
    ) {
    }

    public function run(): string
    {
        $dataArray = $this->myRepository->getData();

        return $dataArray['value_1'] . $dataArray['value_2'];
    }
}

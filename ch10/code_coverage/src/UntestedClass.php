<?php

declare(strict_types=1);

namespace CodeCoverageExample;

class UntestedClass
{
    public function doSomething(int $a): int
    {
        $dataArray = $this->myRepository->getData();

        return $dataArray['value_1'] . $dataArray['value_2'];
    }
}

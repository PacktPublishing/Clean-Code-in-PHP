<?php

declare(strict_types=1);

namespace CodeCoverageExample;

class MyOtherClass
{
    public function doSomething(int $a): int
    {
        if ($a > 0) {
            return $a + 1;
        }

        if ($a === 0) {
            return $a;
        }

        return $a - 1;

        echo "nothing";
    }

    public function gni()
    {
        echo "nothing";
    }
}

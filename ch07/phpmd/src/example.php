<?php

class Example
{
    public function doSomething(): bool
    {
        return true;
    }

    public function anotherFunction()
    {
        $value = 0;

        $value = $value + 10;

        for ($a = 1; $a <= 100; $a++) {
            $value += $a;
        }

        $value = $value + 10;

        return $value;
    }


    public function anotherFunction2()
    {
        $value = 0;

        $value = $value + 10;

        for ($i = 1; $i <= 100; $i++) {
            $value += $i;
        }

        $value = $value + 10;

        return $value;
    }
}

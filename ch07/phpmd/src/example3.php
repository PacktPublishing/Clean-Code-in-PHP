<?php

class Example3
{
    public function doSomething(): bool
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

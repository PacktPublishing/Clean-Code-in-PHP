<?php

class InspectionExample
{
    public function checkGreaterThanOne(int $value): int
    {
        if ($value > 1) {
            return true;
        }

        return false;
    }
}

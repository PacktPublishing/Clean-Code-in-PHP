<?php

class DiagnosticsExample
{
    private int $unusedAttribute = 1;

    private int $usedAttribute = 2;

    public function exampleFunction(): void
    {
        if ($this->usedAttribute == 2) {
            echo $this->usedAttribute;
        }

        $testInstance = new TestClass();
    }
}

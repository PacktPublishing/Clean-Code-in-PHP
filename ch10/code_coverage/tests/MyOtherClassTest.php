<?php

declare(strict_types=1);

namespace CodeCoverageExampleTests;

use CodeCoverageExample\MyOtherClass;
use PHPUnit\Framework\TestCase;

/**
 * @covers \CodeCoverageExample\MyOtherClass
 */
class MyOtherClassTest extends TestCase
{
    public function testGreaterThanZero(): void
    {
        $methodClass = new MyOtherClass();

        $result = $methodClass->doSomething(1);

        $this->assertEquals(2, $result);
    }
}
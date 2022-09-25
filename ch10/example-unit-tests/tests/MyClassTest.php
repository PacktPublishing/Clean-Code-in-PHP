<?php

declare(strict_types=1);

namespace UnitTestsFailExampleTests;

use PHPUnit\Framework\TestCase;
use UnitTestsFailExample\MyApp;
use UnitTestsFailExample\MyRepository;

class MyClassTest extends TestCase
{
    public function testRun(): void
    {
        $repositoryMock = $this->createMock(MyRepository::class);
        $repositoryMock
            ->expects($this->once())
            ->method('getData')
            ->willReturn([
                'value_1' => 'a',
                'value_2' => 'b'
            ]);

        $appTest = new MyApp($repositoryMock);

        $result = $appTest->run();

        $this->assertEquals('ab', $result);
    }
}
<?php

declare(strict_types=1);

namespace CodeCoverageExampleTests;

use PHPUnit\Framework\TestCase;
use CodeCoverageExample\MyApp;
use CodeCoverageExample\MyRepository;

/**
 * @covers \CodeCoverageExample\MyApp
 */
class MyAppTest extends TestCase
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
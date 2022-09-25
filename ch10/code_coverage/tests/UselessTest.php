<?php

declare(strict_types=1);

namespace CodeCoverageExampleTests;

use PHPUnit\Framework\TestCase;
use CodeCoverageExample\MyRepository;

/**
 * @covers \CodeCoverageExample\MyApp
 */
class UselessTest extends TestCase
{
    public function testUselessTestCase(): void
    {
        $repositoryMock = $this->createMock(MyRepository::class);
        $repositoryMock
            ->method('getData')
            ->willReturn([
                'value_1' => 'a',
                'value_2' => 'b'
            ]);

        $this->assertEquals(
            [
                'value_1' => 'a',
                'value_2' => 'b'
            ],
            $repositoryMock->getData()
        );
    }
}
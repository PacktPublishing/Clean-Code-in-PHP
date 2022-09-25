<?php

declare(strict_types=1);

namespace CodeCoverageExampleTests;

use PHPUnit\Framework\TestCase;
use CodeCoverageExample\MyRepository;

/**
 * @covers \CodeCoverageExample\MyRepository
 */
class MyRepositoryTest extends TestCase
{
    public function testGetDataReturnsAnArray(): void
    {
        $repositoryTest = new MyRepository();

        $result = $repositoryTest->getData();

        $this->assertIsArray($result);
        $this->assertCount(2, $result);
    }
}
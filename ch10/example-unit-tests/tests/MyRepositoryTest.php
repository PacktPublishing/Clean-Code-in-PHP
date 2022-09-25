<?php

declare(strict_types=1);

namespace UnitTestsFailExampleTests;

use PHPUnit\Framework\TestCase;
use UnitTestsFailExample\MyRepository;

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
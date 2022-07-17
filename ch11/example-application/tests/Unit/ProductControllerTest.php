<?php

declare(strict_types=1);

namespace GitHubActionsExample\Test\Unit;

use GitHubActionsExample\Controller\ProductController;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GitHubActionsExample\Controller\ProductController
 */
class ProductControllerTest extends TestCase
{
    public function testGetProducts()
    {
        $productController = new ProductController();

        $this->assertEquals(
            [
                [
                    'id' => 1,
                    'name' => 'Foo product',
                ]
            ],
            $productController->get()
        );
    }
}

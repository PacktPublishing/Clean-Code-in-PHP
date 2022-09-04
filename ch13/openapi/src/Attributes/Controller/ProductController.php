<?php

declare(strict_types=1);

namespace OpenApiExample\Attributes\Controller;

use OpenApi\Attributes as OAT;

#[OAT\Info(
    version: '0.1',
    title: 'Product API',
)]
class ProductController
{
    #[OAT\Get(
        path: '/product',
        operationId: 'getProducts',
        parameters: [
            new OAT\Parameter(
                name: 'limit',
                description: 'How many products to return at one time',
                in: 'query',
                required: false,
                schema: new OAT\Schema(
                    type: 'integer'
                ),
            ),
        ],
        responses: [
            new OAT\Response(
                response: 200,
                description: 'Returns the product data',
            ),
        ]
    )]
    public function getProducts(): array
    {
        // ...
    }
}

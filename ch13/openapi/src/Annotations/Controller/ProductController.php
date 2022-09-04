<?php

declare(strict_types=1);

namespace OpenApiExample\Annotations\Controller;

/**
 * @OA\Info(
 *     title="Product API",
 *     version="0.1"
 * )
 */
class ProductController
{
    /**
     * @OA\Get(
     *     path="/product",
     *     operationId="getProducts",
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="How many products to return at one time",
     *         required=false,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns the product data"
     *     )
     * )
     */
    public function getProducts(): array
    {
        // ...
    }
}

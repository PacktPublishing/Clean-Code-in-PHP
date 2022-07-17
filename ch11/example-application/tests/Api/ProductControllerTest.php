<?php

declare(strict_types=1);

namespace GitHubActionsExample\Test\Api;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @covers \GitHubActionsExample\Controller\ProductController
 */
class ProductControllerTest extends TestCase
{
    private Client $client;

    private function getResponseAsArray(ResponseInterface $response): array
    {
        return json_decode(
            $response->getBody()->getContents(),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }

    public function setUp(): void
    {
        $this->client = new Client();
    }

    public function testGetProducts()
    {
        $response = $this->client->request(
            'GET',
            'http://localhost:8000/products'
        );

        $this->assertEquals(
            200,
            $response->getStatusCode()
        );

        $this->assertEquals(
            [
                [
                    'id' => 1,
                    'name' => 'Foo product',
                ]
            ],
            $this->getResponseAsArray($response)
        );
    }
}

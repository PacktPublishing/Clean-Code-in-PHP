<?php

declare(strict_types=1);

use GitHubActionsExample\Controller\ProductController;
use GitHubActionsExample\Controller\UserController;
use Laminas\Diactoros\ResponseFactory;

require __DIR__ . '/../vendor/autoload.php';

// Create request object
$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals();

// Initialise router
$responseFactory = new ResponseFactory();
$strategy = new League\Route\Strategy\JsonStrategy($responseFactory);
$router = new League\Route\Router();
$router->setStrategy($strategy);

// Define routes
$router->map(
    'GET',
    '/products',
    [
        ProductController::class,
        'get'
    ]
);

$router->map(
    'GET',
    '/users',
    [
        UserController::class,
        'get'
    ]
);

// Dispatch the request to receive a response object
$response = $router->dispatch($request);

// Send the response
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter())->emit($response);

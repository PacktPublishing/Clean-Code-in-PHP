<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

class ConstructorInjection
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething(): void
    {
        // Some action happens here

        // Let us log something
        $this->logger->log('Some action has been done');
    }
}

$constructorInjection = new ConstructorInjection(
    new FileLogger()
);
<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

class InstantiationExample
{
    private Logger $logger;

    public function __construct()
    {
        $this->logger = new FileLogger();
    }

    public function doSomething(): void
    {
        // Some action happens here

        // Let us log something
        $this->logger->log('Some action has been done');
    }
}
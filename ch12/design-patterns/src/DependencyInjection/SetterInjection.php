<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

class SetterInjection
{
    private Logger $logger;

    public function __construct()
    {
    }

    public function setLogger(Logger $logger): void
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

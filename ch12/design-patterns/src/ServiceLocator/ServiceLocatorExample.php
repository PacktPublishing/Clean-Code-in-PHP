<?php

declare(strict_types=1);

namespace DesignPatterns\ServiceLocator;

class ServiceLocatorExample
{
    public function __construct(
        private ServiceLocator $serviceLocator
    ) {}

    public function fooBar(): void
    {
        $someService = $this->serviceLocator->get(SomeService::class);
        $someService->doSomething();
    }
}

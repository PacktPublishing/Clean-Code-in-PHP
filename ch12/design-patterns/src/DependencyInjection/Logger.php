<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

interface Logger
{
    public function log(string $message): void;
}
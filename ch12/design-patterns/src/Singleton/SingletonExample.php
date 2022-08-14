<?php

declare(strict_types=1);

namespace DesignPatterns\Singleton;

class SingletonExample
{
    private static ?SingletonExample $instance = null;

    public static function getInstance(): SingletonExample
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$instance = SingletonExample::getInstance();
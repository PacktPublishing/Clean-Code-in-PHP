<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

class SetterInjectionFactory
{
    public function createInstance(): SetterInjection
    {
        $setterInjection = new SetterInjection();
        $setterInjection->setLogger(new FileLogger());

        return $setterInjection;
    }
}

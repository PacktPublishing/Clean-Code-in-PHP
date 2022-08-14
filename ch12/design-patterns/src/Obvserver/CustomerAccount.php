<?php

declare(strict_types=1);

namespace DesignPatterns\Observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

class CustomerAccount implements SplSubject
{
    public int $id;

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function cancelSubscription(): void
    {
        // Required code for the actual cancellation
        // ...

        $this->notify();
    }
}
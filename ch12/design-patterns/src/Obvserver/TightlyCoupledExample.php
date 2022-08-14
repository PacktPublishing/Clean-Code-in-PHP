<?php

declare(strict_types=1);

namespace DesignPatterns\Observer;

class TightlyCoupledExample
{
    private int $id;

    public function __construct(
        private MailService $mailService
    ) {}

    public function cancelSubscription(): void
    {
        // Required code for the actual cancellation
        // ...

        $this->mailService->sendEmail(
            'sales@example.com',
            'Account ' . $this->id . ' has cancelled the subscription'
        );
    }
}
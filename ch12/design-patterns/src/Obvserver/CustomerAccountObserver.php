<?php

declare(strict_types=1);

namespace DesignPatterns\Observer;

use SplSubject;
use SplObserver;

class CustomerAccountObserver implements SplObserver
{
    public function __construct(
        private MailService $mailService
    ) {}

    public function update(CustomerAccount|SplSubject $splSubject): void
    {
        $this->mailService->sendEmail(
            'sales@example.com',
            'Account ' . $splSubject->id . ' has cancelled the subscription'
        );
    }
}
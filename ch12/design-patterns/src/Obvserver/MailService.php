<?php

declare(strict_types=1);

namespace DesignPatterns\Observer;

class MailService
{
    public function sendEmail(
        string $recipient,
        string $messageBody
    ): bool
    {
        // ...
    }
}
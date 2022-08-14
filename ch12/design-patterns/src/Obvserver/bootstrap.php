<?php

use DesignPatterns\Observer\CustomerAccount;
use DesignPatterns\Observer\CustomerAccountObserver;
use DesignPatterns\Observer\MailService;

$mailService = new MailService();
$customerAccountObserver = new CustomerAccountObserver($mailService);
$customerAccount = new CustomerAccount();
$customerAccount->attach($customerAccountObserver);
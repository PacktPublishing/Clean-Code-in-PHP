<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

class FileLogger implements Logger
{
    public function log(string $message): void
    {
        file_put_contents(
            sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'log.txt',
            $message,
            FILE_APPEND
        );
    }
}
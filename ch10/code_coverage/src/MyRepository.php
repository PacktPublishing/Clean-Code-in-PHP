<?php

declare(strict_types=1);

namespace CodeCoverageExample;

class MyRepository
{
    public function getData(): array
    {
        return [
            'val1' => 'some data...',
            'val2' => 'and some more data'
        ];
    }
}

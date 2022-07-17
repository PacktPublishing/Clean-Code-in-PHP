<?php

declare(strict_types=1);

namespace GitHubActionsExample\Controller;

class UserController
{
    public function get(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Foo bar',
            ]
        ];
    }
}

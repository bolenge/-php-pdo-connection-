<?php

/**
 * Get app config
 * @return array[]
 */
function config(): array
{
    return [
        'db' => [
            'user' => 'root',
            'port' => 8889,
            'host' => 'localhost',
            'database' => 'database_name',
            'password' => 'root'
        ]
    ];
}

<?php

/**
 * Get app production config
 * @return array[]
 */
function config(): array
{
    return [
        'db' => [
            'user' => 'root',
            'port' => 3306,
            'host' => '127.0.0.1',
            'database' => 'database_name',
            'password' => ''
        ]
    ];
}

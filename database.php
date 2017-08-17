<?php
/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 8/12/17
 * Time: 3:10 PM
 */

return [
    'fetch' => PDO::FETCH_ASSOC,
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'port' => 3306,
            'username' => 'root',
            'password' => ''
        ]
    ],
    'redis' => [
        'cluster' => 'false',
        'default' => [
            'host' => 'localhost',
            'post' => 6379,
            'database' => 0
        ]
    ]
];
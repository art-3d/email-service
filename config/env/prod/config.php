<?php

return [
    'doctrine.orm' => [
        'mapping' => [
            [
                'type' => 'annotation',
                'namespace' => 'Scutum\\Entities',
                'path' => PATH . '/src/Entities',
            ]
        ]
    ],

    'db.options' => [
        'charset' => 'utf8',
        'host' => 'localhost',
        'dbname' => 'mail',
        'user' => 'root',
        'password' => 'root',
    ]
];

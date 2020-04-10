<?php

return [
    'database' => [
        'name' => getenv('DB_NAME'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD'),
        'connection' => 'mysql:host=' . getenv('DB_HOST'),
        'options' => []
    ]
];

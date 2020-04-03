<?php

$envs = parse_ini_file('.env');

foreach ($envs as $key => $value) {
    $_ENV[$key] = $value;
}

$config = require('config.php');

require 'db/Connection.php';
require 'db/QueryBuilder.php';

$db = new QueryBuilder(Connection::make($config['database']));

<?php

$envs = parse_ini_file('.env');

foreach ($envs as $key => $value) {
    $_ENV[$key] = $value;
}

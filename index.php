<?php

use App\Core\Request;
use App\Core\Router;
use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require 'core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());

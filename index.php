<?php

use App\Core\{Request, Router};

require 'vendor/autoload.php';

require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

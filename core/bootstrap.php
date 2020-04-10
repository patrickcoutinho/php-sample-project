<?php

use App\Core\App;
use App\Core\Db\Connection;
use App\Core\Db\QueryBuilder;

require 'core/envs.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);

    return "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

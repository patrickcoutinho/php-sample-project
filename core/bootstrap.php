<?php

require 'core/envs.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);

    return "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

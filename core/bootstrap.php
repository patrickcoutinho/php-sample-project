<?php
// phpcs:ignoreFile

use App\Core\App;
use App\Core\Db\Connection;
use App\Core\Db\QueryBuilder;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

/**
 * @param string $name
 * @param array $data
 * @return string
 */
function view(string $name, array $data = []): string
{
    extract($data);

    return "app/views/{$name}";
}

/**
 * @param string $path
 * @return void
 */
function redirect(string $path): void
{
    header("Location: /{$path}");
}

/**
 * @param string $string
 * @return string
 */
function render(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

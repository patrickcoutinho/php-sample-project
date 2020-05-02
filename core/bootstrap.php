<?php
// phpcs:ignoreFile

use App\Core\App;
use App\Core\Db\Mysql;

App::bind('config', require 'config.php');

$mysql = new Mysql;
$mysql->connect(App::get('config')['database']);

App::bind('database', $mysql);

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

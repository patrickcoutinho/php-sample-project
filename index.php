<?php

require  'bootstrap.php';
require  'Task.php';

$tasks = $db->selectAll('todo');

echo '<pre>';
var_dump($tasks);

echo 'teste 2';

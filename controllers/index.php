<?php

require  'model/Task.php';

$tasks = $db->selectAll('todo');

require 'views/index.view.php';

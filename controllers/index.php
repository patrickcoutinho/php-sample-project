<?php

require  'model/Task.php';

$users = $db->selectAll('users');

require 'views/index.view.php';

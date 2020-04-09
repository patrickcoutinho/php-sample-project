<?php

require  'model/Task.php';

$users = App::get('database')->selectAll('users');

require 'views/index.view.php';

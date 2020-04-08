<?php

require 'core/envs.php';

$config = require 'config.php';

$db = new QueryBuilder(Connection::make($config['database']));

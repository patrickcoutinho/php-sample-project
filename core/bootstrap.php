<?php

require 'core/envs.php';

$config = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/db/Connection.php';
require 'core/db/QueryBuilder.php';

$db = new QueryBuilder(Connection::make($config['database']));

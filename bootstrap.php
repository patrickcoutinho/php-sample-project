<?php

require 'db/Connection.php';
require 'db/QueryBuilder.php';

$db = new QueryBuilder(Connection::make());
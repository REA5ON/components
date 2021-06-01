<?php

include 'QueryBuilder.php';
include 'Connection.php';
$config = include 'config.php';

return new QueryBuilder(Connection::make($config['database']));

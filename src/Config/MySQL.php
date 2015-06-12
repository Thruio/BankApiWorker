<?php

// Database Settings
if (isset($_SERVER['MYSQL_PORT'])) {
  $host = parse_url($_SERVER['MYSQL_PORT']);
  $database = new \Thru\ActiveRecord\DatabaseLayer(array(
    'db_type'     => 'Mysql',
    'db_hostname' => $host['hostname'],
    'db_port'     => $host['port'],
    'db_username' => $_SERVER['THRUIO_ENV_MYSQL_USER'],
    'db_password' => $_SERVER['THRUIO_ENV_MYSQL_PASS'],
    'db_database' => $_SERVER['THRUIO_ENV_MYSQL_DATABASE'],
  ));
} else {
  $database = new \Thru\ActiveRecord\DatabaseLayer(array(
    'db_type'     => 'Mysql',
    'db_hostname' => "localhost",
    'db_port'     => 3306,
    'db_username' => "bankingapp",
    'db_password' => "2l429q6Zug96iVU",
    'db_database' => "bankingapp",
  ));
}
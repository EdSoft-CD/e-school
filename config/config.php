<?php

/**
 * Database configuration
 *
 */

define("DB_HOST", $_ENV['DB_HOST']);
define("DB_USER", $_ENV['DB_USER']);
define("DB_PASSWORD", $_ENV['DB_PASSWORD']);
define("DB_NAME", $_ENV['DB_NAME']);
define("DSN", "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME);

$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
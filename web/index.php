<?php
define('PATH', dirname(__DIR__));
defined('APP_ENV') or define('APP_ENV', 'dev');
require_once PATH . '/vendor/autoload.php';

$config = require PATH . '/config/env/' . APP_ENV . '/app.php';
$app = new \Scutum\Applications\WebApplication($config);

$app->run();

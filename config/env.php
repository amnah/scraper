<?php

// calculate environment any way you want
$env = 'dev';
if (strpos(__FILE__, '/var/www/scraper') === 0) {
    $env = 'prod';
}
defined('YII_ENV') or define('YII_ENV', $env);

// enable debug for console commands or non-prod environments
$debug = (PHP_SAPI === 'cli' || $env !== 'prod');
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
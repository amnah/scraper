<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$config = require_once __DIR__ . '/web.php';

$config['id'] .= '-console';
$config['bootstrap'][] = 'gii';
$config['modules']['gii'] = 'yii\gii\Module';
$config['controllerNamespace'] = 'app\commands';
unset($config['components']['request']['cookieValidationKey']);
unset($config['components']['log']['traceLevel']);
unset($config['components']['user']);
unset($config['components']['errorHandler']);

return $config;
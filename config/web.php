<?php

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'params' => require(__DIR__ . '/params.php'),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '9IdPlWe8ctp3DnGctm2Qn0F-nQsV5HCX',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'amnah\yii2\user\components\User',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            'messageConfig' => [
                'from' => ['admin@website.com' => 'Admin'],
                'charset' => 'UTF-8',
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=scraper',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
            'enableSchemaCache' => false,
            'schemaCacheDuration' => 3600, // 1 hr
            'enableQueryCache' => false,
            'queryCacheDuration' => 3600,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules'          => [],
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'amnah\yii2\user\Module',
            // set custom module properties here ...
        ],
        'gridview' =>  [
            'class' => 'kartik\grid\Module'
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ]
    ],
];

$config['bootstrap'][] = 'debug';
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    'allowedIPs' => ['*'],
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}
elseif (YII_ENV === 'prod') {
    $config['components']['db']['dsn']      = 'mysql:host=localhost;dbname=dev';
    $config['components']['db']['username'] = 'dev';
    $config['components']['db']['password'] = 'K8k4B9GWMcU4qvx2VqUZT96D7qYbHxQ7';
    $config['components']['db']['tablePrefix'] = 'scr_';

    $config['components']['mailer']['useFileTransport'] = false;
    $config['components']['mailer']['transport'] = [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.mailgun.org',
        'port' => '587',
        'encryption' => 'tls',
        'username' => '',
        'password' => '',
    ];
}

return $config;

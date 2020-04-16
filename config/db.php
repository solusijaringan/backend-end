<?php

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=sji',
    'username' => 'sji',
    'password' => 'SJi@2019',
    'charset' => 'utf8',
    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];

if (YII_ENV_DEV) {
    $db = [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=47.56.123.172;dbname=sji',
        'username' => 'sji',
        'password' => 'SJi@2019',
        'charset' => 'utf8',
    ];
}

return $db;

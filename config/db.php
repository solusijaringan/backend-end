<?php

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=solusijaringan.id:888;dbname=sji',
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
        'dsn' => 'mysql:host=solusijaringan.id;dbname=sji',
        'username' => 'sji',
        'password' => 'YY8Jn8mZS6i3dac3',
        'charset' => 'utf8',
    ];
}

return $db;

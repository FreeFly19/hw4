<?php

require __DIR__. '/database.php';
require __DIR__ . '/../vendor/autoload.php';

use ActiveRecord\AbstractModel;

try {
    $pdo = new PDO(
        $dbConfig['driver'] . ":host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['database'] . ";charset=" . $dbConfig['charset'],
        $dbConfig['user'],
        $dbConfig['password'],
        $dbConfig['opt']
    );
} catch (PDOException $e) {
    die("Connection error!!!<br>\n" . $e->getMessage());
}

AbstractModel::setPDO($pdo);

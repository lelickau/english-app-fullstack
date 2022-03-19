<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'english-learn';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );
} catch (PDOException $i) {
    die("Ошибка подключения к базе данных");
}


$mail_settings = [
    'host' => 'smtp.yandex.ru',
    'auth' => true,
    'port' => 465,
    'username' => 'yourmail@yandex.ru',
    'password' => 'yourmailpass',
    'secure' => 'ssl',
    'charset' => 'UTF-8',
    'from' => 'yourmail@yandex.ru',
    'name' => 'Lelickau.co',
    'is_html' => true,
];

define("TIME_ACTIVE_LINK", 60);
?>
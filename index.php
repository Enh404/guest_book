<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$sql = "SELECT * FROM `notes`";
//$connector = new mysqli($_ENV['SERVER_NAME'], $_ENV['USER_NAME'], $_ENV['PASSWORD'], $_ENV['DB_NAME']);
$resSQL = $connector->query($sql);
while ($notes = $resSQL -> fetch_assoc()) {
    echo '<div style="border: 1px solid black;">';
    echo '<li class="nav-item"> Автор: ' . $notes['author'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Дата: ' . $notes['date'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Отзыв: ' . $notes['comment'] . '</li>' . PHP_EOL;
    echo '<a href="password.php?idc=' . $notes['id'] . '">Удалить отзыв</a>';
    echo  '</div>';
}




<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

$sql = "SELECT * FROM `notes`";
$connector = new \DB\dbConnect();
$resSQL = $connector->createMySQL()->query($sql);
while ($notes = $resSQL -> fetch_assoc()) {
    // Выводим элемент списка
    echo '<div style="border: 1px solid black;">';
    echo '<li class="nav-item"> Автор: ' . $notes['author'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Дата: ' . $notes['date'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Отзыв: ' . $notes['comment'] . '</li>' . PHP_EOL;
    echo '<a href="password.php?idc=' . $notes['id'] . '">Удалить отзыв</a>';
    echo  '</div>';
}



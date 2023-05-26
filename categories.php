<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

$category = $_REQUEST['id'];
$sql = "SELECT * FROM `database`.notes WHERE `categories_pk` = '$category'";
$resSQL = $connector->query($sql);
while ($notes = $resSQL -> fetch_assoc()) {
    // Выводим элемент списка
    echo '<div style="border: 1px solid black;">';
    echo '<li class="nav-item"> Автор: ' . $notes['author'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Дата: ' . $notes['date'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Отзыв: ' . $notes['comment'] . '</li>' . PHP_EOL;
    echo  '</div>';
}

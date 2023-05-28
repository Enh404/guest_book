<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


if ($_REQUEST['id']) {
    $category = $_REQUEST['id'];
    $sql = "SELECT * FROM `notes` WHERE `categories_pk` = '$category'";
} else {
    $sql = "SELECT * FROM `notes`";
}

$resSQL = $connector->query($sql);
while ($notes = $resSQL -> fetch_assoc()) {
    echo '<div style="border: 1px solid black;">';
    echo '<li class="nav-item"> Автор: ' . $notes['author'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Дата: ' . $notes['date'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Отзыв: ' . $notes['comment'] . '</li>' . PHP_EOL;
    echo '<a href="password.php?idc=' . $notes['id'] . '">Удалить отзыв</a>';
    echo  '</div>';
}




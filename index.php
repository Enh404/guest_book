<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

$database = new \Classes\Database();

if ($_REQUEST['id']) {
    $resSQL = $database->getNotesFromDB($_REQUEST['id']);
} else {
    $resSQL = $database->getNotesFromDB();
}


while ($notes = $resSQL -> fetch_assoc()) {
    echo '<div style="border: 1px solid black;">';
    echo '<li class="nav-item"> Автор: ' . $notes['author'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Дата: ' . $notes['date'] . '</li>' . PHP_EOL;
    echo '<li class="nav-item"> Отзыв: ' . $notes['comment'] . '</li>' . PHP_EOL;
    echo '<a href="password.php?idc=' . $notes['id'] . '">Удалить отзыв</a>';
    echo  '</div>';
}

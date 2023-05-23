<?php

require_once 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#000">
    <meta name="theme-color" content="#ffffff">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
    <title>
        Гостевая книга
    </title>
</head>
<body>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Все отзывы</a>
        </li>
        <?php
        $sql = "SELECT * FROM `categories`";
        $connector = new \DB\dbConnect();
        $resSQL = $connector->createMySQL()->query($sql);
        while ($categories = $resSQL -> fetch_assoc()) {
            // Выводим элемент списка
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="categories.php?id=' . $categories['id'] . '">' . $categories['title'] . '</a>';
            echo '</li>';
        }
        ?>
        <li class="nav-item">
            <a class="nav-link" href="post.php">Оставить отзыв</a>
        </li>
    </ul>
</body>


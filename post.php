<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

if ($_REQUEST['author'] and $_REQUEST['comment']) {
    $author = $_REQUEST['author'];
    $comment = $_REQUEST['comment'];
    $category = new \Classes\Category($_REQUEST['category']);
    $date = new DateTimeImmutable('now', new DateTimeZone('Europe/Moscow'));
    $note = new \Classes\Note($author, $date->format('Y-m-d H:i:s'), $comment, $category);
    $database = new \Classes\Database();
    $database->addNoteToDB($note);
    header('Location: index.php');
    exit();
}

?>

<div class="row justify-content-center">
    <div class="col-md-8 p-5">
        <div class="card">
            <div class="card-header">
                Оставить отзыв
            </div>
            <form method="POST" action="">
                <p><input placeholder="Ваше имя" name="author"></p>
                <p><select name="category">
                    <option value="1">Общий</option>
                    <option value="2">Замечания</option>
                    <option value="3">Предложения</option>
                </select></p>
                <p><textarea placeholder="Ваш отзыв" name="comment"></textarea></p>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

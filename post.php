<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

if ($_REQUEST['author'] and $_REQUEST['comment']) {
    $author = $_REQUEST['author'];
    $comment = $_REQUEST['comment'];
    $category = $_REQUEST['category'];
    $note = \Classes\NoteHelper::getNoteFactory($category)->createNote();
    $sql = $note->addToDB($author, $comment);
    $connector = new \DB\dbConnect();
    $connector->createMySQL()->query($sql);
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
                    <option>Общий</option>
                    <option>Замечания</option>
                    <option>Предложения</option>
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

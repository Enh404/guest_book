<?php

require_once 'vendor/autoload.php';
include_once 'includes/header.php';

if ($_REQUEST['password'] == '1234')
{
    // here comes your delete query: use $_POST['deleteItem'] as your id
    $delete = $_REQUEST['idc'];
    $sql = "DELETE FROM `notes` where `id` = '$delete'";
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
                Удалить запись
            </div>
            <form method="POST" action="">
                <p>Пароль администратора: <input type="password" name="password">
                <div class="card-body">
                    <button type="submit" name="deleteItem">
                        Удалить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

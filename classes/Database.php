<?php

namespace Classes;

use mysqli;
use Dotenv\Dotenv;
class Database
{
    private mysqli $mysqli;

    /**
     * @return mysqli
     */
    public function getMysqli(): mysqli
    {
        return $this->mysqli;
    }

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();
        $this->mysqli = new mysqli($_ENV['HOST_NAME'], $_ENV['USER_NAME'], $_ENV['PASSWORD'], $_ENV['DB_NAME']);
    }

    public function addNoteToDB(Note $note): string
    {
        $sql = "INSERT INTO `notes` (author, date, comment, categories_pk) VALUES 
                                                               ('{$note->getAuthor()}', '{$note->getDate()}', '{$note->getComment()}', '{$note->getCategory()->getId()}')";
        return $this->getMysqli()->query($sql);
    }

    public function getCategoriesFromDB(): \mysqli_result|bool
    {
        $sql = "SELECT * FROM `categories`";
        return $this->getMysqli()->query($sql);
    }

    public function getNotesFromDB(int $id = null): \mysqli_result|bool
    {
        $sql = "SELECT * FROM `notes`";
        if ($id) {
            $sql = $sql . "WHERE `categories_pk` = $id";
        }
        return $this->getMysqli()->query($sql);
    }

    public function delNoteFromDB(int $id): \mysqli_result|bool
    {
        $sql = "DELETE FROM `notes` where `id` = '$id'";
        return $this->getMysqli()->query($sql);
    }
}

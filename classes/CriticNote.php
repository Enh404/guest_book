<?php

namespace Classes;

class CriticNote implements NoteInterface
{

    public function addToDB($author, $text): string
    {
        return "INSERT INTO `notes` (author, date, comment, categories_pk) VALUES ('$author', CURRENT_TIMESTAMP, '$text', 2)";
    }
}
<?php

namespace Classes;

class CommonNoteFactory implements NoteFactoryInterface
{

    public static function createNote(): NoteInterface
    {
        return new CommonNote();
    }
}
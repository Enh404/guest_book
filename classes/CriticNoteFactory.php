<?php

namespace Classes;

class CriticNoteFactory implements NoteFactoryInterface
{

    public static function createNote(): NoteInterface
    {
        return new CriticNote();
    }
}
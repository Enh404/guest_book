<?php

namespace Classes;

class OfferNoteFactory implements NoteFactoryInterface
{

    public static function createNote(): NoteInterface
    {
        return new OfferNote();
    }
}
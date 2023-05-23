<?php

namespace Classes;

interface NoteFactoryInterface
{
    public static function createNote(): NoteInterface;
}
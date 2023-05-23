<?php

namespace Classes;

interface NoteInterface
{
    public function addToDB($author, $text): string;
}
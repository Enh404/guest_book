<?php

namespace Classes;

use Exception;

class NoteHelper
{
    /**
     * @throws Exception
     */
    public static function getNoteFactory(string $noteCategory): NoteFactoryInterface
    {
        switch ($noteCategory){
            case 'Общий' : {
                return new CommonNoteFactory();
            }
            case 'Замечания' : {
                return new CriticNoteFactory();
            }
            case 'Предложения' : {
                return new OfferNoteFactory();
            }
            default: {
                throw new Exception('undefined method type: ' . $noteCategory);
            }
        }
    }
}
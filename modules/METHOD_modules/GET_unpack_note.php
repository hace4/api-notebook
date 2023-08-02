<?php

namespace modules\METHOD_modules;

use modules\METHOD_modules\method;

class GET_unpack_note extends method
{
    static $notelist_json = [];
    public static function unpack_note($notes)
    {

        $notelist = [];
        foreach ($notes as $note) {
            $notelist[] = $note;
        }
        if (count($notelist) !== 0) {
            self::$notelist_json = json_encode($notelist);
            self::$message = json_encode(['message' => 'found', 'status' => true]);
        } else {
            self::$notelist_json = '';
            self::$message = json_encode(['message' => 'not found', 'status' => false]);
        }
    }
}

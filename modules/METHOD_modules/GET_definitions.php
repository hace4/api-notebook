<?php

namespace modules\METHOD_modules;

use modules\METHOD_modules\GET_unpack_note;
use modules\db\read;

class GET_definitions extends GET_unpack_note
{

    /**function for definitions show all notes or one*/
    public static function definitions()  
    {
        if (!empty($_GET['q'])) {
            $params = explode('/', $_GET['q']);
            read::get_id_data($params[0]);
        } else {
            read::get_all_data();
        }
        self::unpack_note(read::$result);

        echo self::$notelist_json;
    }
}

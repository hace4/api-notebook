<?php

namespace modules\METHOD_modules;

use modules\db\CRUD;

class GET_definitions
{
    public static function definitions()
    {
        /**function for definitions show all notes or one*/
        if (!empty($_GET['q'])) {
            $params = explode('/', $_GET['q']);
            echo CRUD::get_id_data($params[0]);
        } else {
            CRUD::get_all_data();
        }

        return CRUD::$notelist_json;
    }
}

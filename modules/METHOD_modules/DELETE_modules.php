<?php

namespace modules\METHOD_modules;

use modules\db\delete;
use modules\db\db_controllers;
use modules\METHOD_modules\method;


class DELETE_modules extends method
{
    public static function check($id)
    {

        if (!empty($id)) {
            if (db_controllers::check_field($id)) {
                delete::delete_data($id);
                self::$message =  json_encode(['message' => 'note deleted', 'status' => "ok"]);
                echo self::$message;
            } elseif (!db_controllers::check_field($id)) {
                self::$message =  json_encode(['message' => 'note not found', 'status' => 'not found']);
                echo self::$message;
            }
        } else {
            self::$message =  json_encode(['message' => 'void id', 'status' => 'bad request']);
            echo self::$message;
        }
    }
}

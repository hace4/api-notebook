<?php

namespace modules\METHOD_modules;

use modules\db\db_controllers;
use modules\db\update;
use modules\METHOD_modules\method;

class PATCH_method extends method
{
    /**
     *@param int $id  note identificator 
     */
    private static $id;
    /**
     *@param array $update_feild  fields to be updated  
     */

    private static function unpack_update_field($update_feild): void
    {
        foreach ($update_feild as $key => $values) {
            update::update_data(self::$id, $key, $values);
            next($update_feild);
        }
    }

    public static function update()
    {
        self::$id = $_GET['q'];
        /**function for definitions show all notes or one*/
        if (db_controllers::check_field(self::$id)) {
            if (!empty(self::$id)) {
                $params = json_decode(file_get_contents('php://input'));
                self::unpack_update_field($params);
                self::$message =  json_encode(['message' => ' updated ', 'status' => 'ok']);
            } else {
                self::$message =  json_encode(['message' => ' updated ', 'status' => 'bad request']);
            }
        } else {
            self::$message = json_encode(["message" => "id not found", "status" => 'not found']);
        }
    }
}

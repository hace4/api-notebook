<?php

namespace modules\METHOD_modules;

use modules\METHOD_modules\method;

class POST_validation extends method
{
    /**
    *@param array $params  POST params 
    *@param json $message  server answer 
    */
    private static function check_void_params($params) 
    {

        if (array_key_exists('full_name', $params) && array_key_exists('phone_number', $params) && array_key_exists('EMAIL', $params)) {

            if (array_key_exists('organization', $params) && array_key_exists('date', $params) && array_key_exists('photo', $params)) {
                self::$message = json_encode(['message' => 'Created ', 'status' => 'ok']);
            } else {
                if (!array_key_exists('organization', $params)) {
                    $_POST['organization'] = '';
                }
                if (!array_key_exists('date', $params)) {
                    $_POST['date'] = '';
                }
            }
            if (!array_key_exists('photo', $params)) {
                $_POST['photo'] = '';
            }
            
            $_POST[] = $params;

            self::$message = json_encode(['message' => 'Created ', 'status' => True]);

        } else {
            self::$message = json_encode(['message' => 'not valid request ', 'status' => false]);
        }
    }

    public static function validation()
    {
        self::check_void_params($_POST);
    }
}

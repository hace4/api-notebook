<?php

namespace modules\METHOD_modules;

class POST_validation
{
    public static $message = [];
    public static $status = true;
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

            self::$message = json_encode(['message' => 'Created ', 'status' => 'ok']);

        } else {
            self::$status = false;
            self::$message = json_encode(['message' => 'not valid request ', 'status' => '403']);
        }
    }

    public static function validation()
    {
        /**~
         *@hace4
         *method validation field
         *@array $params 
         */
        self::check_void_params($_POST);
    }
}

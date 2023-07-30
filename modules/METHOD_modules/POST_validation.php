<?php

namespace modules\METHOD_modules;

class POST_validation
{
    private static $valid_params = [];
    public static $message = [];

    private static function check_void_params($params)
    {

        if (array_key_exists('full_name', $params) && array_key_exists('phone_number', $params) && array_key_exists('EMAIL', $params)) {

            if (array_key_exists('organization', $params) && array_key_exists('date', $params) && array_key_exists('photo', $params)) {
                'l';
            } else {
                if (!array_key_exists('organization', $params)) {
                    self::$valid_params +=  ['organization' => ''];
                }
                if (!array_key_exists('date', $params)) {
                    self::$valid_params +=  ['date' => ''];
                }
            }
            if (!array_key_exists('photo', $params)) {
                self::$valid_params +=  ['photo' => ''];
            }
            self::$valid_params = $params;
            self::$message = json_encode(['message' => 'Created ','status'=> 'ok']);
        } else {
            http_response_code(403);
        }
    }

    public static function validation($params)
    {
        /**
         *@hace4
         *method validation field
         *@array $params 
         */
        self::check_void_params($params);
        return self::$valid_params;
    }
}

<?php
namespace modules\METHOD_modules;
/**
 *@hace4
*method for sql insert request
*@param $full_name
*@param $organization
*@param  $phone_number
*@param  $EMAIL
*@param  $date
*@param   $photo
*@param $page_name
*/
class validation{
    private static $valid_params = [];

    private static function check_void_params($params){

        if( array_key_exists('full_name', $params) && array_key_exists('phone_number', $params) && array_key_exists('EMAIL', $params)){
            self::$valid_params = $params;
            if ( array_key_exists( 'organization', $params ) && array_key_exists( 'date', $params ) && array_key_exists( 'photo', $params ) ){
                 'l';
            }else{
                if(  !array_key_exists( 'organization', $params )  ){
                self::$valid_params +=  ['organization' =>''];
            }if(  !array_key_exists( 'date', $params )  ){
                self::$valid_params +=  ['date' =>''];
            }
            }if(  !array_key_exists( 'photo', $params )  ){
                self::$valid_params +=  ['photo' =>''];
            }
            }
        else {
            echo  json_encode(['message'=> 'not valid']);
        }
    }

    public static function validation($params){
        self::check_void_params($params);
        return self::$valid_params;
    }
}
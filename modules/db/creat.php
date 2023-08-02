<?php
namespace modules\db;

use modules\db\connect;


class creat extends connect{
    /**
    *@hace4
    *method for sql insert request
    *@param string $organization
    *@param string  $EMAIL
    *@param string  $date
    *@param string   $photo
    *@param string $full_name
    *@param string $page_name
    *@param string  $phone_number
    */
    public static function add_data($full_name, $organization, $phone_number, $EMAIL, $date, $photo){
        mysqli_query(self::$db, "INSERT INTO `note` (`id`, `full_name`, `organization`, `phone_number`, `EMAIL`, `date`, `photo`) VALUES (NULL, '$full_name', '$organization', '$phone_number', '$EMAIL', '$date', '$photo')");
    }
}
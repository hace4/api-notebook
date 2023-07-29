<?php

namespace modules\db;


class CRUD extends connect
{
    static $notelist_json = [];

    public static function start()
    {
        self::db();
    }
    public static function get_all_data()
    {
        $notelist = [];
        $notes = mysqli_query(self::$db, "SELECT * FROM `note`");
        foreach ($notes as $note) {
            $notelist[] = $note;
        }
        self::$notelist_json = json_encode($notelist);
        http_response_code(200);
    }
    public static function add_data($full_name, $organization, $phone_number, $EMAIL, $date, $photo){
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
        mysqli_query(self::$db, "INSERT INTO `note` (`id`, `full_name`, `organization`, `phone_number`, `EMAIL`, `date`, `photo`) VALUES (NULL, '$full_name', '$organization', '$phone_number', '$EMAIL', '$date', '$photo')");
        echo "$full_name";
    }
}

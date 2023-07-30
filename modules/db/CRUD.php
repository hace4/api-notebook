<?php

namespace modules\db;


class CRUD extends connect
{
    static $notelist_json = [];

    public static function start()
    {
        self::db();
    }
    private static function unpack_note($notes){
        $notelist = [];
        foreach ($notes as $note) {
            $notelist[] = $note;
        } 
        if (count($notelist) !== 0){     
            self::$notelist_json = json_encode($notelist);
            http_response_code(200);

        }else{
             self::$notelist_json = json_encode(['message'=>'not found', 'status'=>'404']);
            http_response_code(404);
        }

    }
    public static function get_all_data()
    {
        $notes = mysqli_query(self::$db, "SELECT * FROM `note`");
        self::unpack_note($notes);
    }
    public static function get_id_data($id)
    {
        $notes = mysqli_query(self::$db, "SELECT * FROM `note` WHERE `id` = $id");
        self::unpack_note($notes);
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
    }
}

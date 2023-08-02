<?php
namespace modules\db;

use modules\db\connect;


class read extends connect{
    public static function get_all_data()
    {
        self::$result = mysqli_query(self::$db, "SELECT * FROM `note`");
    }

    public static function get_id_data($id)
    {
        self::$result = mysqli_query(self::$db, "SELECT * FROM `note` WHERE `id` = $id");
        return mysqli_num_rows(self::$result);
    }
}
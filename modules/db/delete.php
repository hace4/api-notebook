<?php
namespace modules\db;
use modules\db\connect;

class delete extends connect{
    public static function delete_data($id)
    {
        self::$result = mysqli_query(self::$db, "DELETE FROM note WHERE `note`.`id` = $id");
    }
}
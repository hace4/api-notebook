<?php

namespace modules\db;

class connect
{
    public static $result;
    protected static $db;

    public static function start()
    {
        $config = require_once "config/db.php";

        if ($config['enable']) {
            self::$db = mysqli_connect("$config[host]", "$config[username]", "$config[password]",  "$config[name_db]"); //for both mysql or mariaDB

            if (!self::$db) {
                die('Db not connect');
            }
        }
    }
}

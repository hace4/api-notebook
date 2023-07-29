<?php

namespace modules\db;

class connect
{
    protected static $db;

    protected static function db()
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

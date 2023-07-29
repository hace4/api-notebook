<?php

namespace modules;

class Router
/**
 *@hace4
 *method for add new rout
 *@param $uri
 *@param $page_name
 */
{
    private static $list = [];
    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable()
    {
        // requriens a page with name from  Server request method
        $query = $_SERVER['REQUEST_METHOD'];

        foreach (self::$list as $route) {
            if ($route["uri"] ===  $query) {
                require_once  "METHOD/$route[page].php";
                die();
            }
        }
    }
}

<?php
header('Content-Type: application/json');

// use modules which start db connection

use modules\db\connect;

//include composer autoload
require_once __DIR__ . "/vendor/autoload.php";
//start db connection
connect::start();
//include routes
require_once __DIR__ . "/router/routes.php";

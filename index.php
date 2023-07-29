<?php
header('Content-Type: application/json; charset=utf-8');
// use modules CRUD[Creat, Read, Update, Delete]
use modules\db\CRUD;
//include composer autoload
require_once __DIR__ . "/vendor/autoload.php";
//start db connection
CRUD::start();
//get info from all tabeles in db
CRUD::get_all_data();
//include rotes
require_once __DIR__ . "/router/routes.php";

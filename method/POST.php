<?php

use modules\db\CRUD;
use modules\METHOD_modules\POST_validation;


$params =  POST_validation::validation($_GET) ;

if ( $params ){   
    CRUD::add_data($params['full_name'], $params['organization'], $params['phone_number'], $params['EMAIL'], $params['date'], $params["photo"]);
    echo POST_validation::$message;
    http_response_code(201);
}

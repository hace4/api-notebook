<?php

use modules\db\CRUD;
use modules\METHOD_modules\validation;


$params =  validation::validation($_GET) ;

if ( !$params ){
    
}else{
    CRUD::add_data($params['full_name'], $params['organization'], $params['phone_number'], $params['EMAIL'], $params['date'], $params["photo"]);
}


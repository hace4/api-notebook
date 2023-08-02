<?php

use modules\db\creat;
use modules\METHOD_modules\POST_validation;


POST_validation::validation() ;


if ( json_decode(POST_validation::$message, true)['status']){   
    creat::add_data($_POST['full_name'], $_POST['organization'], $_POST['phone_number'], $_POST['EMAIL'], $_POST['date'], $_POST["photo"]);
    echo POST_validation::$message;
    http_response_code(201);
}else{
    http_response_code(403);
    die(POST_validation::$message);

}

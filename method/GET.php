<?php

use modules\METHOD_modules\GET_definitions;



GET_definitions::definitions();

if (json_decode(GET_definitions::$message, true)['status']) {
    http_response_code(200);
}else{
    echo GET_definitions::$message;
    http_response_code(404);
}

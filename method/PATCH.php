<?php
use modules\METHOD_modules\PATCH_method;

PATCH_method::update();

echo PATCH_method::$message;

switch (json_decode(PATCH_method::$message, true)['status']) {
    case 'not found':
        http_response_code(404);
        break;

    case 'bad request':
        http_response_code(400);
        break;

    default:
        http_response_code(200);
        break;
}
<?php
use modules\db\CRUD;
$params = explode('/', $_GET['q']);
CRUD::delete_data($params[0]);
http_response_code(200);
echo json_encode(['message'=>'note delted', 'status'=>'ok']);
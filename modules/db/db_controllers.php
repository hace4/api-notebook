<?php
namespace modules\db;

use modules\db\read;


class db_controllers extends connect{

    public static function check_field($id){
        if(read::get_id_data($id) !== 0){
            return true;
        }else{
            return false;
        }
    }

}
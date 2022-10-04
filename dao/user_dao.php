<?php

require_once './dao/base_dao.php';
function user_store($name, $email, $password, $role_id, $avatar = ''){
    $sql = "insert into users 
                (name, 
                email, 
                password, 
                
                role_id, 
                avatar)
            values 
                (?, ?, ?, ?, ?)";
    pdo_execute($sql, $name, $email, $password, $role_id, $avatar);
}

function user_all(){
    $sql = "select * from users";
    return pdo_query($sql);
}

?>
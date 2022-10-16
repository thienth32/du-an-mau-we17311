<?php

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

function get_all_users(){
    $sql = "select 
                u.*, 
                r.name as role_name
            from users u
            join roles r
                on r.id = u.role_id";
    return pdo_query($sql);
}

?>
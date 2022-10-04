<?php

require_once './dao/base_dao.php';

function role_all(){
    $sql = "select * from roles";
    return pdo_query($sql);
}

function role_destroy($id){
    $removeUserWithRole = "delete from users where role_id = ?";
    pdo_execute($removeUserWithRole, $id);
    $removeRoleQuery = "delete from roles where id = ?";
    pdo_execute($removeRoleQuery, $id);
    
}

?>
<?php

function pdo_get_connect(){
    $connect = new PDO(
        "mysql:host=202.92.5.49;dbname=sepfbywahosting_duanmau;charset=utf8",
        "sepfbywahosting_nhom1",
        "iXylDQ5Heoih");
    return $connect;
}

function pdo_execute($sql){
    $connect = pdo_get_connect();
    $inputData = array_slice(func_get_args(), 1);
    $stmt = $connect->prepare($sql);
    $stmt->execute($inputData);
}

function pdo_query($sql){
    $connect = pdo_get_connect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

?>
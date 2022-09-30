<?php
function get_connect(){
    $connect = new PDO(
        "mysql:host=202.92.5.49;dbname=sepfbywahosting_duanmau;charset=utf8",
        "sepfbywahosting_nhom1",
        "iXylDQ5Heoih");
    return $connect;
}

?>
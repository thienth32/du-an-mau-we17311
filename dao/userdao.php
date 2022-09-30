<?php
require './dao.php';
function get_all(){
    $sql = "select * from users";
    $conn = get_connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
?>
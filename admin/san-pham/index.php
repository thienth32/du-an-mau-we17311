<?php
session_start();
require_once '../../global.php';
if(isset($_GET['create'])){
    $VIEW_NAME = 'create.php';
}else if(isset($_GET['update'])){
    $VIEW_NAME = 'update.php';

}else if(isset($_GET['remove'])){
    // $VIEW_NAME = 'update.php';
    header("location: " . ADMIN_URL . 'san-pham/index.php');
    die;
}else{
    $VIEW_NAME = 'list.php';
}

include_once '../layout.php';
?>
<?php
const BASE_URL = "http://localhost/we17311/";
const SITE_URL = BASE_URL . 'site/index.php';
const CONTENT_URL = BASE_URL . 'content/';
const ADMIN_URL = BASE_URL . 'admin/';

function check_admin_role(){
    if(isset($_SESSION['auth']) && $_SESSION['auth']['role_id'] == 2){
        return true;
    }

    return false;
}

?>
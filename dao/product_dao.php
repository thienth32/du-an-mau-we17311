<?php
require_once '../dao/base_dao.php';
function get_products_by_cate_ids($list_ids = []){
    $sqlQuery = "select * from products";
    if(count($list_ids) > 0){
        
        $sqlQuery .= " where category_id in (" . implode(', ', $list_ids) . ")";
    }
    return pdo_query($sqlQuery);
}

?>
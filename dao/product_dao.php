<?php
function get_products_by_cate_ids($list_ids = []){
    $sqlQuery = "select 
                        p.*,
                        c.name as category_name 
                from products p
                join categories c
                on p.category_id = c.id ";
    if(count($list_ids) > 0){
        
        $sqlQuery .= " where category_id in (" . implode(', ', $list_ids) . ")";
    }
    return pdo_query($sqlQuery);
}

function get_product_by_id($id){
    $sqlQuery = "select 
                        p.*,
                        c.name as category_name 
                from products p
                join categories c
                on p.category_id = c.id 
                where p.id = $id";
    return pdo_query_one($sqlQuery);
}

?>
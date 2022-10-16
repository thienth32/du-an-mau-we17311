<?php
require_once '../dao/base_dao.php';
function get_product_colors($id){
    $sqlQuery = "select 
                    pcx.product_id,
                    pcx.color_id , 
                    c.name as color_name
                from product_color_xref pcx
                join colors c
                    on pcx.color_id = c.id
                where pcx.product_id = $id";
    return pdo_query($sqlQuery);
}

?>